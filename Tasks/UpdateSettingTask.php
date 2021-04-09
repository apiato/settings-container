<?php

namespace App\Containers\VendorSection\Settings\Tasks;

use App\Containers\VendorSection\Settings\Data\Repositories\SettingRepository;
use App\Containers\VendorSection\Settings\Models\Setting;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSettingTask extends Task
{
    protected SettingRepository $repository;

    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, $data): Setting
    {
        try {
            return $this->repository->update($data, $id);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
