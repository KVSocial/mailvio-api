# Mailvio API SDK for PHP

Modern PHP SDK for Mailvio, generated from the markdown API docs in [`docs/API`](docs/API).

## What this package is

- Source of truth: `docs/API/*.md`
- Generated endpoint wrappers: `src/Generated/*`
- Runtime client namespace: `Mailvio\\Api`
- Default API endpoint: `https://apiv2.mailvio.com`
- Default auth header: `x-access-token`

## Requirements

- PHP 8.1+
- `ext-curl`
- `ext-json`

## Install

```bash
composer require kyvio/mailvio-api
```

## Quick Start

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Mailvio\Api\ClientConfig;
use Mailvio\Api\MailvioClient;

$config = new ClientConfig(
    baseUrl: 'https://apiv2.mailvio.com',
    accessToken: 'YOUR_ACCESS_TOKEN'
);

$client = new MailvioClient($config);

// GET /group
$groups = $client->retrieveAllGroups();

// POST /group/:groupId/subscriber
$subscriber = $client->addingASubscriber([
    'path' => ['groupId' => 123],
    'body' => [
        'emailAddress' => 'user@example.com',
        'blackListed' => false,
    ],
]);
```

## Public API

### Main classes

- `Mailvio\\Api\\ClientConfig`
- `Mailvio\\Api\\MailvioClient`
- `Mailvio\\Api\\ApiResponse`
- `Mailvio\\Api\\HttpException`

### Calling operations

1. Generated wrappers (recommended), for example:
- `loginToAnAccount()`
- `retrieveAllApiKeys()`
- `addingASubscriber()`

2. Low-level operation call:

```php
$response = $client->callOperation('addingASubscriber', [
    'path' => ['groupId' => 123],
    'body' => ['emailAddress' => 'user@example.com'],
]);
```

3. Raw request call:

```php
$response = $client->request('GET', '/group');
```

## Request Options

All generated methods accept `array $options`:

- `path`: replace route placeholders (`:groupId`, `:campaignId`)
- `query`: query string values
- `body`: JSON body
- `form_params`: URL-encoded body
- `multipart`: multipart payload
- `headers`: request headers
- `timeout`: timeout override (seconds)
- `decode`: `false` to skip JSON decode

## Response Shape

Methods return `Mailvio\\Api\\ApiResponse`:

- `getStatusCode(): int`
- `getHeaders(): array`
- `getBody(): mixed`
- `getRawBody(): string`

## Regenerate SDK Wrappers

When `docs/API` changes:

```bash
composer run generate-sdk
```

This regenerates:

- `src/Generated/Operations.php`
- `src/Generated/OperationMethods.php`

## Tests

```bash
composer install
composer test
```

## Verification (3 Layers)

Use all three checks before release:

1. Spec-sync check

Regenerate wrappers and confirm no drift from `docs/API`:

```bash
composer run generate-sdk
git diff -- src/Generated/Operations.php src/Generated/OperationMethods.php
```

2. Automated test check

Run unit + contract tests:

```bash
composer test
```

3. Real API smoke check

Run one authenticated live endpoint with a real token:

```bash
MAILVIO_TOKEN='your_token' php -r '
require "vendor/autoload.php";
$client = new Mailvio\Api\MailvioClient(
    new Mailvio\Api\ClientConfig(accessToken: getenv("MAILVIO_TOKEN"))
);
$res = $client->retrieveAllApiKeys();
echo "HTTP ".$res->getStatusCode().PHP_EOL;
var_export($res->getBody());
'
```
