<?php

namespace App\Containers\Vendor\Settings\Providers;

use App\Ship\Parents\Providers\MainServiceProvider as MainProvider;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
class MainServiceProvider extends MainProvider
{
    /**
     * Container Service Providers.
     */
    public array $serviceProviders = [

    ];

    /**
     * Container Aliases
     */
    public array $aliases = [

    ];
}
