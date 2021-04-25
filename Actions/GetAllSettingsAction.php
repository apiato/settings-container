<?php

namespace App\Containers\Vendor\Settings\Actions;

use App\Containers\Vendor\Settings\Tasks\GetAllSettingsTask;
use App\Ship\Parents\Actions\Action;

class GetAllSettingsAction extends Action
{
	public function run()
	{
		return app(GetAllSettingsTask::class)->addRequestCriteria()->ordered()->run();
	}
}
