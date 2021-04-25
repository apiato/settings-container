<?php

namespace App\Containers\Vendor\Settings\Actions;

use App\Containers\Vendor\Settings\Tasks\UpdateSettingTask;
use App\Containers\Vendor\Settings\UI\API\Requests\UpdateSettingRequest;
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
