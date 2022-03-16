<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\VoucherUsageRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class VoucherUsageRepository extends BaseRepository implements VoucherUsageRepositoryInterface {

    /**
     * @var VoucherUsage
     */
    protected $model;

    /**
     * @param VoucherUsage $model
     */
    public function __construct(VoucherUsage $model) {
        $this->model = $model;
    }

}
