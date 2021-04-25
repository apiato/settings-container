<?php

namespace App\Containers\Vendor\Settings\Actions;

use App\Containers\Vendor\Settings\Tasks\DeleteSettingTask;
use App\Containers\Vendor\Settings\Tasks\FindSettingByIdTask;
use App\Containers\Vendor\Settings\UI\API\Requests\DeleteSettingRequest;
use App\Ship\Parents\Actions\Action;

class DeleteSettingAction extends Action
{
	public function run(DeleteSettingRequest $data): void
	{
		$setting = app(FindSettingByIdTask::class)->run($data->id);
		app(DeleteSettingTask::class)->run($setting);
	}
}
