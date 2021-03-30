<?php

namespace App\Modules\Settings\Data\Repositories;

use App\Modules\Settings\Models\Setting;
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
