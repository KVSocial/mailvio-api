<?php

declare(strict_types=1);

namespace Mailvio\Api;

use Mailvio\Api\Generated\OperationMethods;
use Mailvio\Api\Generated\Operations;

final class MailvioClient
{
    use OperationMethods;

    public function __construct(
        private ?ClientConfig $config = null,
        private ?HttpTransport $transport = null
    ) {
        $this->config ??= new ClientConfig();
        $this->transport ??= new HttpTransport();
    }

    public function getConfig(): ClientConfig
    {
        return $this->config;
    }

    public function setConfig(ClientConfig $config): self
    {
        $this->config = $config;

        return $this;
    }

    public function setAccessToken(?string $accessToken): self
    {
        $this->config->setAccessToken($accessToken);

        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->config->getAccessToken();
    }

    public function setBaseUrl(string $baseUrl): self
    {
        $this->config->setBaseUrl($baseUrl);

        return $this;
    }

    /**
     * @param array<string, mixed> $options
     */
    public function request(string $method, string $path, array $options = []): ApiResponse
    {
        return $this->transport->send($this->config, $method, $path, $options);
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function listOperations(): array
    {
        return Operations::all();
    }

    /**
     * @return array<string, mixed>
     */
    public function getOperation(string $operationId): array
    {
        return Operations::get($operationId);
    }

    /**
     * @param array<string, mixed> $options
     */
    public function callOperation(string $operationId, array $options = []): ApiResponse
    {
        $operation = $this->getOperation($operationId);

        if (($operation['requires_auth'] ?? false) && !$this->hasAccessToken($options)) {
            throw new HttpException(sprintf('Operation "%s" requires an access token.', $operationId));
        }

        return $this->request((string) $operation['method'], (string) $operation['path'], $options);
    }

    /**
     * @param array<string, mixed> $options
     */
    private function hasAccessToken(array $options): bool
    {
        if ($this->config->getAccessToken() !== null) {
            return true;
        }

        $headers = $options['headers'] ?? [];
        if (!is_array($headers)) {
            return false;
        }

        foreach ($headers as $name => $value) {
            if (strtolower((string) $name) === 'x-access-token' && trim((string) $value) !== '') {
                return true;
            }
        }

        return false;
    }
}
