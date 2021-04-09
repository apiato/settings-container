<?php

/**
 * @apiGroup           Settings
 * @apiName            updateSetting
 *
 * @api                {PATCH} /v1/settings/:id Update Setting
 * @apiDescription     Updates a setting entry (both key / value)
 *
 * @apiParam           {String}  [key] max:190
 * @apiParam           {String}  [value] max:190
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated Admin
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 * {
 * "data": {
 * "object": "Setting",
 * "id": "aadfa72342sa",
 * "key": "foo",
 * "value": "bar"
 * },
 * "meta": {
 * "include": [],
 * "custom": []
 * }
 * }
 */

use App\Containers\VendorSection\Settings\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('settings/{id}', [Controller::class, 'updateSetting'])
    ->name('api_settings_update_setting')
    ->middleware(['auth:api']);
