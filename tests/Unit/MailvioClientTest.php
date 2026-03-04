<?php

declare(strict_types=1);

namespace Mailvio\Api\Tests\Unit;

use Mailvio\Api\ApiResponse;
use Mailvio\Api\ClientConfig;
use Mailvio\Api\HttpException;
use Mailvio\Api\HttpTransport;
use Mailvio\Api\MailvioClient;
use PHPUnit\Framework\TestCase;

final class MailvioClientTest extends TestCase
{
    public function testCallOperationForwardsMethodPathAndOptions(): void
    {
        $transport = new RecordingTransport();
        $config = new ClientConfig(accessToken: 'token');
        $client = new MailvioClient($config, $transport);

        $response = $client->callOperation('addingASubscriber', [
            'path' => ['groupId' => 123],
            'body' => ['emailAddress' => 'test@example.com'],
        ]);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('POST', $transport->lastMethod);
        $this->assertSame('/group/:groupId/subscriber', $transport->lastPath);
        $this->assertSame(['groupId' => 123], $transport->lastOptions['path']);
    }

    public function testRequiresAuthWithoutTokenThrows(): void
    {
        $transport = new RecordingTransport();
        $client = new MailvioClient(new ClientConfig(), $transport);

        $this->expectException(HttpException::class);
        $this->expectExceptionMessage('requires an access token');

        $client->callOperation('addingASubscriber');
    }

    public function testAuthRequiredOperationAllowsRequestHeaderToken(): void
    {
        $transport = new RecordingTransport();
        $client = new MailvioClient(new ClientConfig(), $transport);

        $response = $client->callOperation('addingASubscriber', [
            'headers' => ['x-access-token' => 'from-header'],
        ]);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('POST', $transport->lastMethod);
    }

    public function testGeneratedMethodCallsCallOperation(): void
    {
        $transport = new RecordingTransport();
        $client = new MailvioClient(new ClientConfig(accessToken: 'token'), $transport);

        $client->retrieveAllApiKeys();

        $this->assertSame('GET', $transport->lastMethod);
        $this->assertSame('/accountMaster/apikey', $transport->lastPath);
    }

    public function testPublicOperationCanBeCalledWithoutToken(): void
    {
        $transport = new RecordingTransport();
        $client = new MailvioClient(new ClientConfig(), $transport);

        $client->createANewAccount(['body' => ['emailAddress' => 'x@example.com']]);

        $this->assertSame('POST', $transport->lastMethod);
        $this->assertSame('/register', $transport->lastPath);
    }
}

final class RecordingTransport extends HttpTransport
{
    public string $lastMethod = '';

    public string $lastPath = '';

    /** @var array<string, mixed> */
    public array $lastOptions = [];

    /** @param array<string, mixed> $options */
    public function send(ClientConfig $config, string $method, string $path, array $options = []): ApiResponse
    {
        $this->lastMethod = $method;
        $this->lastPath = $path;
        $this->lastOptions = $options;

        return new ApiResponse(200, [], ['ok' => true], '{"ok":true}');
    }
}
