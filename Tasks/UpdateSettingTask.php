<?php

namespace App\Containers\Vendor\Settings\Tasks;

use App\Containers\Vendor\Settings\Data\Repositories\SettingRepository;
use App\Containers\Vendor\Settings\Models\Setting;
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
