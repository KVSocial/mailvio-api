<?php

declare(strict_types=1);

namespace Mailvio\Api;

class HttpTransport
{
    /**
     * @param array<string, mixed> $options
     */
    public function send(ClientConfig $config, string $method, string $path, array $options = []): ApiResponse
    {
        $method = strtoupper(trim($method));
        if ($method === '') {
            throw new \InvalidArgumentException('HTTP method cannot be empty.');
        }

        $resolvedPath = $this->interpolatePath($path, $options['path'] ?? []);
        $url = $this->buildUrl($config->getBaseUrl(), $resolvedPath, $options['query'] ?? []);

        $headers = $this->normalizeHeaders(array_merge(
            $config->getDefaultHeaders(),
            is_array($options['headers'] ?? null) ? $options['headers'] : []
        ));

        if (!isset($headers['accept'])) {
            $headers['accept'] = 'application/json';
        }

        if ($config->getAccessToken() !== null && !isset($headers['x-access-token'])) {
            $headers['x-access-token'] = $config->getAccessToken();
        }

        [$payload, $hasPayload] = $this->buildPayload($options, $headers);

        $timeout = (int) ($options['timeout'] ?? $config->getTimeoutSeconds());
        if ($timeout <= 0) {
            $timeout = $config->getTimeoutSeconds();
        }

        $ch = curl_init($url);
        if ($ch === false) {
            throw new HttpException('Failed to initialize cURL.');
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->formatHeaders($headers));

        switch ($method) {
            case 'GET':
                break;
            case 'POST':
                curl_setopt($ch, CURLOPT_POST, true);
                break;
            case 'HEAD':
                curl_setopt($ch, CURLOPT_NOBODY, true);
                break;
            default:
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
                break;
        }

        if ($hasPayload && !in_array($method, ['GET', 'HEAD'], true)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        }

        $response = curl_exec($ch);
        if ($response === false) {
            $message = curl_error($ch);
            $code = curl_errno($ch);
            curl_close($ch);

            throw new HttpException('cURL transport error: ' . $message, $code);
        }

        $statusCode = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        $headerSize = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        curl_close($ch);

        $headerText = substr($response, 0, $headerSize);
        $rawBody = (string) substr($response, $headerSize);
        $responseHeaders = $this->parseHeaders($headerText ?: '');

        $decode = (bool) ($options['decode'] ?? true);
        $body = $decode ? $this->decodeBody($rawBody, $responseHeaders) : $rawBody;

        if ($statusCode >= 400) {
            throw new HttpException(
                $this->buildErrorMessage($statusCode, $body),
                $statusCode,
                $responseHeaders,
                $body
            );
        }

        return new ApiResponse($statusCode, $responseHeaders, $body, $rawBody);
    }

    /**
     * @param array<string, mixed> $options
     * @param array<string, string> $headers
     *
     * @return array{0:mixed,1:bool}
     */
    private function buildPayload(array $options, array &$headers): array
    {
        if (array_key_exists('multipart', $options)) {
            return [$options['multipart'], true];
        }

        if (array_key_exists('form_params', $options)) {
            $formParams = is_array($options['form_params']) ? $options['form_params'] : [];
            if (!isset($headers['content-type'])) {
                $headers['content-type'] = 'application/x-www-form-urlencoded';
            }

            return [http_build_query($formParams), true];
        }

        if (!array_key_exists('body', $options)) {
            return [null, false];
        }

        $body = $options['body'];
        if (is_array($body) || is_object($body)) {
            $encoded = json_encode($body);
            if ($encoded === false) {
                throw new \InvalidArgumentException('Could not JSON encode request body.');
            }

            if (!isset($headers['content-type'])) {
                $headers['content-type'] = 'application/json';
            }

            return [$encoded, true];
        }

        return [(string) $body, true];
    }

    /**
     * @param array<string, mixed> $pathParams
     */
    private function interpolatePath(string $path, array $pathParams): string
    {
        if ($path === '') {
            throw new \InvalidArgumentException('Request path cannot be empty.');
        }

        $lookup = [];
        foreach ($pathParams as $name => $value) {
            $lookup[(string) $name] = (string) $value;
            $lookup[strtolower((string) $name)] = (string) $value;
        }

        return (string) preg_replace_callback(
            '/:([A-Za-z0-9_]+)/',
            static function (array $matches) use ($lookup): string {
                $name = $matches[1];
                $lowerName = strtolower($name);

                if (array_key_exists($name, $lookup)) {
                    return rawurlencode($lookup[$name]);
                }

                if (array_key_exists($lowerName, $lookup)) {
                    return rawurlencode($lookup[$lowerName]);
                }

                throw new \InvalidArgumentException(sprintf('Missing required path parameter "%s".', $name));
            },
            $path
        );
    }

    /**
     * @param array<string, mixed> $query
     */
    private function buildUrl(string $baseUrl, string $path, array $query): string
    {
        $url = rtrim($baseUrl, '/') . (str_starts_with($path, '/') ? $path : '/' . $path);

        if ($query !== []) {
            $queryString = http_build_query($query);
            if ($queryString !== '') {
                $url .= (str_contains($url, '?') ? '&' : '?') . $queryString;
            }
        }

        return $url;
    }

    /**
     * @param array<string, mixed> $headers
     *
     * @return array<string, string>
     */
    private function normalizeHeaders(array $headers): array
    {
        $normalized = [];

        foreach ($headers as $name => $value) {
            $key = strtolower(trim((string) $name));
            if ($key === '') {
                continue;
            }

            $normalized[$key] = trim((string) $value);
        }

        return $normalized;
    }

    /**
     * @param array<string, string> $headers
     *
     * @return list<string>
     */
    private function formatHeaders(array $headers): array
    {
        $formatted = [];
        foreach ($headers as $name => $value) {
            $segments = array_map(static fn (string $segment): string => ucfirst($segment), explode('-', $name));
            $formatted[] = implode('-', $segments) . ': ' . $value;
        }

        return $formatted;
    }

    /**
     * @return array<string, string>
     */
    private function parseHeaders(string $headerText): array
    {
        $headers = [];
        $lines = preg_split('/\r\n|\n|\r/', $headerText) ?: [];

        foreach ($lines as $line) {
            if (str_starts_with($line, 'HTTP/')) {
                $headers = [];
                continue;
            }

            $line = trim($line);
            if ($line === '' || !str_contains($line, ':')) {
                continue;
            }

            [$name, $value] = explode(':', $line, 2);
            $headers[strtolower(trim($name))] = trim($value);
        }

        return $headers;
    }

    /**
     * @param array<string, string> $headers
     */
    private function decodeBody(string $rawBody, array $headers): mixed
    {
        if ($rawBody === '') {
            return '';
        }

        $contentType = strtolower($headers['content-type'] ?? '');
        $trimmed = ltrim($rawBody);
        $likelyJson = str_contains($contentType, 'json') || str_starts_with($trimmed, '{') || str_starts_with($trimmed, '[');

        if (!$likelyJson) {
            return $rawBody;
        }

        $decoded = json_decode($rawBody, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $rawBody;
        }

        return $decoded;
    }

    private function buildErrorMessage(int $statusCode, mixed $body): string
    {
        $prefix = 'Mailvio API request failed with HTTP ' . $statusCode;

        if (is_array($body)) {
            foreach (['message', 'error', 'details'] as $key) {
                if (isset($body[$key]) && is_string($body[$key]) && $body[$key] !== '') {
                    return $prefix . ': ' . $body[$key];
                }
            }
        }

        if (is_string($body) && trim($body) !== '') {
            $snippet = trim($body);
            if (strlen($snippet) > 220) {
                $snippet = substr($snippet, 0, 220) . '...';
            }

            return $prefix . ': ' . $snippet;
        }

        return $prefix;
    }
}
