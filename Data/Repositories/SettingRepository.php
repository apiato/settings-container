<?php

namespace App\Containers\Vendor\Settings\Data\Repositories;

use App\Containers\Vendor\Settings\Models\Setting;
use App\Ship\Parents\Repositories\Repository;

class SettingRepository extends Repository
{
    protected $fieldSearchable = [
        'id' => '=',
        'key' => '=',
    ];

    public function model(): string
    {
        return Setting::class;
    }
}
