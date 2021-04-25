<?php

namespace App\Containers\Vendor\Settings\Actions;

use App\Containers\Vendor\Settings\Models\Setting;
use App\Containers\Vendor\Settings\Tasks\CreateSettingTask;
use App\Containers\Vendor\Settings\UI\API\Requests\CreateSettingRequest;
use App\Ship\Parents\Actions\Action;

class CreateSettingAction extends Action
{
	public function run(CreateSettingRequest $data): Setting
	{
		$sanitizedData = $data->sanitizeInput([
			'key',
			'value'
		]);

		return app(CreateSettingTask::class)->run($sanitizedData);
	}
}
