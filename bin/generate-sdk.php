#!/usr/bin/env php
<?php

declare(strict_types=1);

$projectRoot = dirname(__DIR__);
$docsDir = $projectRoot . '/docs/API';
$generatedDir = $projectRoot . '/src/Generated';
$operationsFile = $generatedDir . '/Operations.php';
$methodsFile = $generatedDir . '/OperationMethods.php';

if (!is_dir($docsDir)) {
    fwrite(STDERR, "Docs directory not found: {$docsDir}\n");
    exit(1);
}

$files = glob($docsDir . '/*.md');
if ($files === false) {
    fwrite(STDERR, "Failed to read docs directory.\n");
    exit(1);
}

sort($files, SORT_NATURAL);

$operations = [];

foreach ($files as $file) {
    $basename = basename($file);
    if (!preg_match('/^(\d+)-(.+)\.md$/', $basename, $parts)) {
        continue;
    }

    $docId = (int) $parts[1];
    $slug = $parts[2];
    $markdown = file_get_contents($file);
    if ($markdown === false) {
        fwrite(STDERR, "Could not read {$basename}\n");
        exit(1);
    }

    preg_match('/^#\s+(.+)$/m', $markdown, $titleMatch);
    preg_match('/^- Request Method:[ \t]*([^\r\n]*)$/mi', $markdown, $methodMatch);
    preg_match('/^- Request URL:[ \t]*([^\r\n]*)$/mi', $markdown, $urlMatch);
    preg_match('/^- Requires Auth:[ \t]*([^\r\n]*)$/mi', $markdown, $authMatch);

    $title = trim($titleMatch[1] ?? $slug);
    $method = strtoupper(trim($methodMatch[1] ?? ''));
    $path = trim($urlMatch[1] ?? '');
    $requiresAuth = strtolower(trim($authMatch[1] ?? '')) === 'yes';

    if ($method === '' || $path === '') {
        continue;
    }

    $operationId = makeOperationId($slug);
    if (isset($operations[$operationId])) {
        $operationId = $operationId . 'Doc' . $docId;
    }

    $operations[$operationId] = [
        'operation_id' => $operationId,
        'doc_id' => $docId,
        'title' => $title,
        'method' => $method,
        'path' => $path,
        'requires_auth' => $requiresAuth,
        'source' => 'docs/API/' . $basename,
    ];
}

uasort(
    $operations,
    static function (array $a, array $b): int {
        if ($a['doc_id'] === $b['doc_id']) {
            return strcmp($a['operation_id'], $b['operation_id']);
        }

        return $a['doc_id'] <=> $b['doc_id'];
    }
);

if (!is_dir($generatedDir) && !mkdir($generatedDir, 0775, true) && !is_dir($generatedDir)) {
    fwrite(STDERR, "Could not create generated directory: {$generatedDir}\n");
    exit(1);
}

$operationsCode = "<?php\n\ndeclare(strict_types=1);\n\nnamespace Mailvio\\Api\\Generated;\n\nfinal class Operations\n{\n";
$operationsCode .= "    /**\n";
$operationsCode .= "     * @var array<string, array<string, mixed>>\n";
$operationsCode .= "     */\n";
$operationsCode .= '    public const MAP =' . indentExport($operations) . ";\n\n";
$operationsCode .= "    /**\n";
$operationsCode .= "     * @return array<string, array<string, mixed>>\n";
$operationsCode .= "     */\n";
$operationsCode .= "    public static function all(): array\n";
$operationsCode .= "    {\n";
$operationsCode .= "        return self::MAP;\n";
$operationsCode .= "    }\n\n";
$operationsCode .= "    /**\n";
$operationsCode .= "     * @return array<string, mixed>\n";
$operationsCode .= "     */\n";
$operationsCode .= "    public static function get(string \$operationId): array\n";
$operationsCode .= "    {\n";
$operationsCode .= "        if (!isset(self::MAP[\$operationId])) {\n";
$operationsCode .= "            throw new \\InvalidArgumentException(sprintf('Unknown operation %s.', \$operationId));\n";
$operationsCode .= "        }\n\n";
$operationsCode .= "        return self::MAP[\$operationId];\n";
$operationsCode .= "    }\n";
$operationsCode .= "}\n";

$methodsCode = "<?php\n\ndeclare(strict_types=1);\n\nnamespace Mailvio\\Api\\Generated;\n\nuse Mailvio\\Api\\ApiResponse;\n\n/**\n * @generated from docs/API/*.md\n */\ntrait OperationMethods\n{\n";

foreach ($operations as $operationId => $operation) {
    $methodsCode .= "    /**\n";
    $methodsCode .= '     * ' . escapeDocLine((string) $operation['title']) . ' (Doc ' . (int) $operation['doc_id'] . ").\n";
    $methodsCode .= "     *\n";
    $methodsCode .= "     * @param array<string, mixed> \$options\n";
    $methodsCode .= "     */\n";
    $methodsCode .= '    public function ' . $operationId . "(array \$options = []): ApiResponse\n";
    $methodsCode .= "    {\n";
    $methodsCode .= '        return $this->callOperation(' . var_export($operationId, true) . ", \$options);\n";
    $methodsCode .= "    }\n\n";
}

$methodsCode .= "}\n";

file_put_contents($operationsFile, $operationsCode);
file_put_contents($methodsFile, $methodsCode);

fwrite(STDOUT, 'Generated ' . count($operations) . " operations\n");
fwrite(STDOUT, "- {$operationsFile}\n");
fwrite(STDOUT, "- {$methodsFile}\n");

function makeOperationId(string $slug): string
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

/**
 * @param mixed $value
 */
function indentExport(mixed $value): string
{
    $export = var_export($value, true);
    $indented = preg_replace('/^/m', '        ', $export) ?: $export;

    return "\n" . $indented;
}

function escapeDocLine(string $line): string
{
    return str_replace(['*/', '\n', '\r'], ['*\/', ' ', ' '], $line);
}
