<?php

declare(strict_types=1);

namespace Mailvio\Api\Tests\Unit;

use Mailvio\Api\ClientConfig;
use PHPUnit\Framework\TestCase;

final class ClientConfigTest extends TestCase
{
    public function testDefaultsAreApplied(): void
    {
        $config = new ClientConfig();

        $this->assertSame('https://apiv2.mailvio.com', $config->getBaseUrl());
        $this->assertNull($config->getAccessToken());
        $this->assertSame(30, $config->getTimeoutSeconds());
        $this->assertSame([], $config->getDefaultHeaders());
    }

    public function testHeadersAndTokenAreNormalized(): void
    {
        $config = new ClientConfig(
            baseUrl: 'https://apiv2.mailvio.com/',
            accessToken: '  abc123  ',
            timeoutSeconds: 15,
            defaultHeaders: [
                'X-CUSTOM' => ' Value ',
                '  ' => 'ignored',
            ]
        );

        $this->assertSame('https://apiv2.mailvio.com', $config->getBaseUrl());
        $this->assertSame('abc123', $config->getAccessToken());
        $this->assertSame(15, $config->getTimeoutSeconds());
        $this->assertSame(['x-custom' => 'Value'], $config->getDefaultHeaders());
    }

    public function testInvalidTimeoutThrows(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new ClientConfig(timeoutSeconds: 0);
    }
}
