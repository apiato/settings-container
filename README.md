# [Apiato](https://github.com/apiato/apiato) Settings Container

An Apiato container which helps store and retrieving key values

At many cases you need to have some dynamic system settings, such as in a referral program, where you give 'gifts' to anyone who refers new users.
But those gifts can be changed in the future, so it's better not have them statically created in the code, instead read from the database where an  Admin can manage them at any time.

This container helps to store and retrieve those key values settings. You can also seed the database with the default configurations.

#### Compatiblity table

| Container Version  | Apiato Version|
| -------------------|---------------|
| `^2.*.*`           | `^10.*.*`     |

- [Installation](#installation)
- [Seed the default settings](#seed-the-default-settings)
- [Read settings](#read-settings)

<a name="installation"></a>
## Installation

```
composer require apiato/settings-container
```
Now run `php artisan migrate`

<a name="seed-the-default-settings"></a>

## Seed the default settings

1) Copy the container from `VendorSection` to a section of your project and fix the namespaces.
2) Seed default settings in `app/Containers/YourSection/Settings/Database/Seeders/DefaultSystemSettingsSeeder.php`

<a name="read-settings"></a>

## Read settings

```php
<?php
$value = $this->findSettingsByKeyTask->run('whateverSettingsName');
```

You can search for settings by Key as in the example above, or create a class for each settings as follow:

```php
<?php
$value = $this->findWhateverSettingsTask->run();
```
