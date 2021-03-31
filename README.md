# Settings [Apiato](https://github.com/apiato/apiato) Container

An Apiato container which helps store and retrieving key values

At many cases you need to have some dynamic system settings, such as in a referral program, where you give 'gifts' to anyone who refers new users.
But those gifts can be changed in the future, so it's better not have them statically created in the code, instead read from the database where an  Admin can manage them at any time.

This container helps to store and retrieve those key values settings. You can also seed the database with the default configurations.


- [Installation](#installation)
- [Seed the default settings](#seed-the-default-settings)
- [Read settings](#read-settings)

<a name="installation"></a>
## Installation
Add this to your  `app/composer.json` then run `composer update`
```
"mohammad-alavi/apiato-setings": "^2.0.0"
```
This container will be installed in `app/Modules/Settings`

<a name="seed-the-default-settings"></a>

## Seed the default settings

Default Settings should be seeded in `app/Modules/Settings/Database/Seeders/DefaultSystemSettingsSeeder.php`

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
