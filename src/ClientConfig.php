<?php

declare(strict_types=1);

namespace Mailvio\Api;

final class ClientConfig
{
    private string $baseUrl;

    private ?string $accessToken;

    private int $timeoutSeconds;

    /** @var array<string, string> */
    private array $defaultHeaders = [];

    /**
     * @param array<string, string> $defaultHeaders
     */
    public function __construct(
        string $baseUrl = 'https://apiv2.mailvio.com',
        ?string $accessToken = null,
        int $timeoutSeconds = 30,
        array $defaultHeaders = []
    ) {
        $this->setBaseUrl($baseUrl);
        $this->setAccessToken($accessToken);
        $this->setTimeoutSeconds($timeoutSeconds);
        $this->setDefaultHeaders($defaultHeaders);
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): self
    {
        $baseUrl = rtrim(trim($baseUrl), '/');
        if ($baseUrl == '') {
            throw new \InvalidArgumentException('Base URL cannot be empty.');
        }

        $this->baseUrl = $baseUrl;

        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): self
    {
        if ($accessToken !== null) {
            $accessToken = trim($accessToken);
        }

        $this->accessToken = $accessToken === '' ? null : $accessToken;

        return $this;
    }

    public function getTimeoutSeconds(): int
    {
        return $this->timeoutSeconds;
    }

    public function setTimeoutSeconds(int $timeoutSeconds): self
    {
        if ($timeoutSeconds <= 0) {
            throw new \InvalidArgumentException('Timeout must be greater than zero.');
        }

        $this->timeoutSeconds = $timeoutSeconds;

        return $this;
    }

    /**
     * @return array<string, string>
     */
    public function getDefaultHeaders(): array
    {
        return $this->defaultHeaders;
    }

    /**
     * @param array<string, string> $defaultHeaders
     */
    public function setDefaultHeaders(array $defaultHeaders): self
    {
        $headers = [];
        foreach ($defaultHeaders as $name => $value) {
            $key = strtolower(trim((string) $name));
            if ($key === '') {
                continue;
            }

            $headers[$key] = trim((string) $value);
        }

        $this->defaultHeaders = $headers;

        return $this;
    }
}
