<?php

namespace App\Modules\Settings\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Modules\Settings\Models\Setting;
use App\Modules\Settings\UI\API\Requests\CreateSettingRequest;
use App\Ship\Parents\Actions\Action;

class CreateSettingAction extends Action
{
    public function run(CreateSettingRequest $data): Setting
    {
        $sanitizedData = $data->sanitizeInput([
            'key',
            'value'
        ]);

        return Apiato::call('Settings@CreateSettingTask', [$sanitizedData]);
    }
}
