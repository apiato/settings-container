<?php

namespace App\Containers\Vendor\Settings\UI\API\Controllers;

use App\Containers\Vendor\Settings\Actions\CreateSettingAction;
use App\Containers\Vendor\Settings\Actions\DeleteSettingAction;
use App\Containers\Vendor\Settings\Actions\GetAllSettingsAction;
use App\Containers\Vendor\Settings\Actions\UpdateSettingAction;
use App\Containers\Vendor\Settings\UI\API\Requests\CreateSettingRequest;
use App\Containers\Vendor\Settings\UI\API\Requests\DeleteSettingRequest;
use App\Containers\Vendor\Settings\UI\API\Requests\GetAllSettingsRequest;
use App\Containers\Vendor\Settings\UI\API\Requests\UpdateSettingRequest;
use App\Containers\Vendor\Settings\UI\API\Transformers\SettingTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
	public function getAllSettings(GetAllSettingsRequest $request): array
	{
		$settings = app(GetAllSettingsAction::class)->run();
		return $this->transform($settings, SettingTransformer::class);
	}

	public function createSetting(CreateSettingRequest $request): array
	{
		$setting = app(CreateSettingAction::class)->run($request);
		return $this->transform($setting, SettingTransformer::class);
	}

	public function updateSetting(UpdateSettingRequest $request): array
	{
		$setting = app(UpdateSettingAction::class)->run($request);
		return $this->transform($setting, SettingTransformer::class);
	}

	public function deleteSetting(DeleteSettingRequest $request): JsonResponse
	{
		app(DeleteSettingAction::class)->run($request);
		return $this->noContent();
	}
}
