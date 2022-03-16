<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Deal;
use App\Models\DealGroupDetails;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\DealGroupDetailsRepositoryInterface;
use App\Repositories\DealRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class DealGroupDetailsRepository extends BaseRepository implements DealGroupDetailsRepositoryInterface {

    /**
     * @var DealGroupDetails
     */
    protected $model;

    /**
     * @param DealGroupDetails $model
     */
    public function __construct(DealGroupDetails $model) {
        $this->model = $model;
    }

}
