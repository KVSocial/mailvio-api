<?php

declare(strict_types=1);

namespace Mailvio\Api;

final class ApiResponse
{
    /**
     * @param array<string, string> $headers
     */
    public function __construct(
        private int $statusCode,
        private array $headers,
        private mixed $body,
        private string $rawBody
    ) {
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getBody(): mixed
    {
        return $this->body;
    }

    public function getRawBody(): string
    {
        return $this->rawBody;
    }
}
