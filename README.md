# brixion/kolibri-sdk-php

PHP SDK for the [Kolibri24](https://www.kolibri24.com/) REST API.

Includes typed `Api\` / `Model\` clients for the Kolibri HTTP API, plus OAuth2
client-credentials helpers, automatic token refresh, and a thin `Kolibri` facade.

Current client targets OpenAPI document version **4.1.1245.0**.
Sandbox spec: [https://sandbox-api.kolibri24.com/v3/swagger](https://sandbox-api.kolibri24.com/v3/swagger).

## Requirements

- PHP 8.2+
- Composer
- [Guzzle](https://docs.guzzlephp.org/) 7

## Installation

```bash
composer require brixion/kolibri-sdk-php
```

## Quick start

Recommended: use the facade (shared config + HTTP client with token refresh):

```php
use Brixion\Kolibri\Kolibri;

$kolibri = Kolibri::sandbox(
    clientId: getenv('KOLIBRI_CLIENT_ID'),
    clientSecret: getenv('KOLIBRI_CLIENT_SECRET'),
    // scope: 'optional-scope', // only if your AppXchange client requires it
);

$response = $kolibri->bids()->bidsSearch(/* ... */);
// or: $kolibri->api(\Brixion\Kolibri\Api\BidsApi::class)->bidsSearch(/* ... */);
```

Production:

```php
$kolibri = Kolibri::live(
    clientId: getenv('KOLIBRI_CLIENT_ID'),
    clientSecret: getenv('KOLIBRI_CLIENT_SECRET'),
);
```

Tokens refresh automatically before expiry. On HTTP 401 the client refreshes once and retries.

### Lower-level usage

```php
use Brixion\Kolibri\Api\BidsApi;
use Brixion\Kolibri\ClientCredentials;

$auth = ClientCredentials::sandbox(
    clientId: getenv('KOLIBRI_CLIENT_ID'),
    clientSecret: getenv('KOLIBRI_CLIENT_SECRET'),
);

$configuration = $auth->createConfiguration(); // host matches sandbox/live of $auth
$api = new BidsApi($auth->createHttpClient(), $configuration);
$response = $api->bidsSearch(/* ... */);
```

You can also set a static token (no auto-refresh):

```php
use Brixion\Kolibri\Configuration;

$configuration = Configuration::live();
$configuration->setAccessToken($auth->getAccessToken());
```

## Namespaces

| Namespace | Contents |
|-----------|----------|
| `Brixion\Kolibri\` | `Kolibri` facade, `ClientCredentials`, `Configuration`, serializers |
| `Brixion\Kolibri\Api\` | API endpoint clients |
| `Brixion\Kolibri\Model\` | Request/response models |

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md). Bug reports and pull requests are welcome.

## License

MIT — see [LICENSE](LICENSE).
