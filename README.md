# Build Core and Helpers


## Description
Build cho vui, cho tiện thôi

## Installation

```bash
composer require pigs/base-core
```

### Khai báo service  config/app.php
```php
'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        ...
        Pigs\BaseCore\PigsBaseCoreServiceProvider::class,
        ...
    ])->toArray(),
```
### Publish config, asset, migrate, seed data

```bash

```