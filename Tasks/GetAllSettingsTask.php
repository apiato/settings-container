<?php

namespace App\Containers\VendorSection\Settings\Tasks;

use App\Containers\VendorSection\Settings\Data\Criterias\OrderByKeyAscendingCriteria;
use App\Containers\VendorSection\Settings\Data\Repositories\SettingRepository;
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
