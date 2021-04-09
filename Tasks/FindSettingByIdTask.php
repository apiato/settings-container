<?php

namespace App\Containers\VendorSection\Settings\Tasks;

use App\Containers\VendorSection\Settings\Data\Repositories\SettingRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSettingByIdTask extends Task
{
    protected SettingRepository $repository;

    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        } catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
