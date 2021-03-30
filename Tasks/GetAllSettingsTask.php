<?php

namespace App\Modules\Settings\Tasks;

use App\Modules\Settings\Data\Criterias\OrderByKeyAscendingCriteria;
use App\Modules\Settings\Data\Repositories\SettingRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSettingsTask extends Task
{
    protected SettingRepository $repository;

    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }

    public function ordered(): SettingRepository
    {
        return $this->repository->pushCriteria(new OrderByKeyAscendingCriteria());
    }
}
