<?php

namespace App\Containers\VendorSection\Settings\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\VendorSection\Settings\Tasks\DeleteSettingTask;
use App\Containers\VendorSection\Settings\Tasks\FindSettingByIdTask;
use App\Containers\VendorSection\Settings\UI\API\Requests\DeleteSettingRequest;
use App\Ship\Parents\Actions\Action;

class DeleteSettingAction extends Action
{
	public function run(DeleteSettingRequest $data): void
	{
		$setting = Apiato::call(FindSettingByIdTask::class, [$data->id]);
		Apiato::call(DeleteSettingTask::class, [$setting]);
	}
}
