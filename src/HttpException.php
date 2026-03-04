<?php

declare(strict_types=1);

namespace Mailvio\Api;

final class HttpException extends \RuntimeException
{
    /**
     * @param array<string, string> $headers
     */
    public function __construct(
        string $message,
        private int $statusCode = 0,
        private array $headers = [],
        private mixed $responseBody = null,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $statusCode, $previous);
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

    public function getResponseBody(): mixed
    {
        return $this->responseBody;
    }
}
