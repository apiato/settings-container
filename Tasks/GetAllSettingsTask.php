<?php

namespace App\Containers\Vendor\Settings\Tasks;

use App\Containers\Vendor\Settings\Data\Criterias\OrderByKeyAscendingCriteria;
use App\Containers\Vendor\Settings\Data\Repositories\SettingRepository;
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

    public function ordered(): self
    {
    	$this->repository->pushCriteria(new OrderByKeyAscendingCriteria());
	    return $this;
    }
}
