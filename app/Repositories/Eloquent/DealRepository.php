<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Deal;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\DealRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class DealRepository extends BaseRepository implements DealRepositoryInterface {

    /**
     * @var Deal
     */
    protected $model;

    /**
     * @param Deal $model
     */
    public function __construct(Deal $model) {
        $this->model = $model;
    }

}
