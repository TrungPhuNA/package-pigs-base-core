# Build Core and Helpers


## Description
Build cho vui, cho tiện thôi

## Installation

```bash
composer require pigs/admin-acl-setting
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
        Pigs\AdminAclSetting\Provides\AdminAclSettingProvider::class,
        ...
    ])->toArray(),
```
### Publish config, asset, migrate, seed data

```bash
php artisan vendor:publish --tag="adm_acl_setting_asset"
```

```bash
php artisan vendor:publish --tag="adm_acl_setting_config"
```

```bash
php artisan vendor:publish --tag="adm_acl_setting_migration"
```

```bash
php artisan adm-acl:seed-permission
```