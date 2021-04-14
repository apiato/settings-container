<?php

namespace App\Containers\VendorSection\Settings\Actions;

use App\Containers\VendorSection\Settings\Tasks\GetAllSettingsTask;
use App\Ship\Parents\Actions\Action;

class GetAllSettingsAction extends Action
{
	public function run()
	{
		return app(GetAllSettingsTask::class)->addRequestCriteria()->ordered()->run();
	}
}
