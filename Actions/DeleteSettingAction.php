<?php

namespace App\Containers\VendorSection\Settings\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\VendorSection\Settings\UI\API\Requests\DeleteSettingRequest;
use App\Ship\Parents\Actions\Action;

class DeleteSettingAction extends Action
{
    public function run(DeleteSettingRequest $data): void
    {
        $setting = Apiato::call('Settings@FindSettingByIdTask', [$data->id]);
        Apiato::call('Settings@DeleteSettingTask', [$setting]);
    }
}
