<?php

declare(strict_types=1);

namespace Mailvio\Api\Tests\Contract;

use Mailvio\Api\Generated\Operations;
use Mailvio\Api\MailvioClient;
use PHPUnit\Framework\TestCase;

final class OperationsCoverageTest extends TestCase
{
    public function testGeneratedOperationsCountMatchesApiDocs(): void
    {
        $expectedCount = count($this->parseDocsApiOperations());

        $this->assertSame($expectedCount, count(Operations::MAP));
    }

    public function testSentinelMappingsAreCorrect(): void
    {
        $login = Operations::get('loginToAnAccount');
        $addSubscriber = Operations::get('addingASubscriber');
        $apiKeys = Operations::get('retrieveAllApiKeys');

        $this->assertSame('POST', $login['method']);
        $this->assertSame('/auth', $login['path']);

        $this->assertSame('POST', $addSubscriber['method']);
        $this->assertSame('/group/:groupId/subscriber', $addSubscriber['path']);

        $this->assertSame('GET', $apiKeys['method']);
        $this->assertSame('/accountMaster/apikey', $apiKeys['path']);
    }

    public function testClientContainsAllGeneratedOperationMethods(): void
    {
        $client = new MailvioClient();

        foreach (Operations::MAP as $operationId => $operation) {
            $this->assertTrue(
                method_exists($client, $operationId),
                sprintf('Missing generated method "%s" from %s', $operationId, $operation['source'])
            );
        }
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private function parseDocsApiOperations(): array
    {
        $operations = [];
        $files = glob(__DIR__ . '/../../docs/API/*.md') ?: [];
        sort($files, SORT_NATURAL);

        foreach ($files as $file) {
            $basename = basename($file);
            if (!preg_match('/^(\d+)-(.+)\.md$/', $basename, $parts)) {
                continue;
            }

            $docId = (int) $parts[1];
            $slug = $parts[2];
            $content = file_get_contents($file);
            if ($content === false) {
                continue;
            }

            preg_match('/^- Request Method:[ \t]*([^\r\n]*)$/mi', $content, $methodMatch);
            preg_match('/^- Request URL:[ \t]*([^\r\n]*)$/mi', $content, $urlMatch);
            preg_match('/^- Requires Auth:[ \t]*([^\r\n]*)$/mi', $content, $authMatch);

            $method = strtoupper(trim($methodMatch[1] ?? ''));
            $path = trim($urlMatch[1] ?? '');
            if ($method === '' || $path === '') {
                continue;
            }

            $operationId = $this->makeOperationId($slug);
            if (isset($operations[$operationId])) {
                $operationId .= 'Doc' . $docId;
            }

            $operations[$operationId] = [
                'doc_id' => $docId,
                'method' => $method,
                'path' => $path,
                'requires_auth' => strtolower(trim($authMatch[1] ?? '')) === 'yes',
            ];
        }

        return $operations;
    }

    private function makeOperationId(string $slug): string
    {
        $tokens = preg_split('/[^a-zA-Z0-9]+/', strtolower($slug)) ?: [];
        $tokens = array_values(array_filter($tokens, static fn (string $token): bool => $token !== ''));

        if ($tokens === []) {
            return 'operation';
        }

        $operationId = array_shift($tokens);
        foreach ($tokens as $token) {
            $operationId .= ucfirst($token);
        }

        if (preg_match('/^\d/', $operationId)) {
            $operationId = 'operation' . ucfirst($operationId);
        }

        return $operationId;
    }
}
