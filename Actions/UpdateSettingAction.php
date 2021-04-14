<?php

namespace App\Containers\VendorSection\Settings\Actions;

use App\Containers\VendorSection\Settings\Tasks\UpdateSettingTask;
use App\Containers\VendorSection\Settings\UI\API\Requests\UpdateSettingRequest;
use App\Ship\Parents\Actions\Action;

class UpdateSettingAction extends Action
{
	public function run(UpdateSettingRequest $data)
	{
		$sanitizedData = $data->sanitizeInput([
			'key',
			'value'
		]);

		return app(UpdateSettingTask::class)->run($data->id, $sanitizedData);
	}
}
