<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Deal;
use App\Models\DealGroups;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\DealGroupsRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class DealGroupsRepository extends BaseRepository implements DealGroupsRepositoryInterface {

    /**
     * @var DealGroups
     */
    protected $model;

    /**
     * @param DealGroups $model
     */
    public function __construct(DealGroups $model) {
        $this->model = $model;
    }

}
