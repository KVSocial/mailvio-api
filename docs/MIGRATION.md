# Migration Guide (Legacy Swagger SDK -> Mailvio API SDK)

This package was fully reset to align with `docs/API`.

## Breaking Changes

1. Namespace changed:
- Old: `Swagger\\Client\\*`
- New: `Mailvio\\Api\\*`

2. Legacy classes removed:
- `Swagger\\Client\\ApiClient`
- `Swagger\\Client\\Configuration`
- `Swagger\\Client\\Api\\*`
- `Swagger\\Client\\Model\\*`

3. Legacy docs removed:
- `docs/API_old`
- `docs/Model`

4. PHP requirement changed:
- Old: PHP 5.6+
- New: PHP 8.1+

5. Auth model changed:
- New SDK uses `x-access-token` by default (from `docs/API` auth docs)

## New Usage Pattern

```php
use Mailvio\Api\ClientConfig;
use Mailvio\Api\MailvioClient;

$config = new ClientConfig(accessToken: 'YOUR_TOKEN');
$client = new MailvioClient($config);

$response = $client->retrieveAllApiKeys();
```

## Endpoint Wrappers

Endpoint methods are generated from `docs/API/*.md` file slugs.

- Deterministic naming: slug-based camelCase
- Regeneration command: `composer run generate-sdk`

## Recommendation

Treat this migration as a full rewrite of integration code if you were using `Swagger\\Client` previously.
