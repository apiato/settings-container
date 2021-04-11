<?php

namespace App\Containers\VendorSection\Settings\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\VendorSection\Settings\Models\Setting;
use App\Containers\VendorSection\Settings\Tasks\CreateSettingTask;
use App\Containers\VendorSection\Settings\UI\API\Requests\CreateSettingRequest;
use App\Ship\Parents\Actions\Action;

class CreateSettingAction extends Action
{
	public function run(CreateSettingRequest $data): Setting
	{
		$sanitizedData = $data->sanitizeInput([
			'key',
			'value'
		]);

		return Apiato::call(CreateSettingTask::class, [$sanitizedData]);
	}
}
