<?php

namespace App\Containers\VendorSection\Settings\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\VendorSection\Settings\Actions\CreateSettingAction;
use App\Containers\VendorSection\Settings\Actions\DeleteSettingAction;
use App\Containers\VendorSection\Settings\Actions\GetAllSettingsAction;
use App\Containers\VendorSection\Settings\Actions\UpdateSettingAction;
use App\Containers\VendorSection\Settings\UI\API\Requests\CreateSettingRequest;
use App\Containers\VendorSection\Settings\UI\API\Requests\DeleteSettingRequest;
use App\Containers\VendorSection\Settings\UI\API\Requests\GetAllSettingsRequest;
use App\Containers\VendorSection\Settings\UI\API\Requests\UpdateSettingRequest;
use App\Containers\VendorSection\Settings\UI\API\Transformers\SettingTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
	public function getAllSettings(GetAllSettingsRequest $request): array
	{
		$settings = Apiato::call(GetAllSettingsAction::class);
		return $this->transform($settings, SettingTransformer::class);
	}

	public function createSetting(CreateSettingRequest $request): array
	{
		$setting = Apiato::call(CreateSettingAction::class, [$request]);
		return $this->transform($setting, SettingTransformer::class);
	}

	public function updateSetting(UpdateSettingRequest $request): array
	{
		$setting = Apiato::call(UpdateSettingAction::class, [$request]);
		return $this->transform($setting, SettingTransformer::class);
	}

	public function deleteSetting(DeleteSettingRequest $request): JsonResponse
	{
		Apiato::call(DeleteSettingAction::class, [$request]);
		return $this->noContent();
	}
}
