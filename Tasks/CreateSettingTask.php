<?php

namespace App\Containers\VendorSection\Settings\Tasks;

use App\Containers\VendorSection\Settings\Data\Repositories\SettingRepository;
use App\Containers\VendorSection\Settings\Models\Setting;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSettingTask extends Task
{
    protected SettingRepository $repository;

    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data): Setting
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
