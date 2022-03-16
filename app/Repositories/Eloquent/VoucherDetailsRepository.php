<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Repositories\VoucherDetailsRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class VoucherDetailsRepository extends BaseRepository implements VoucherDetailsRepositoryInterface {

    /**
     * @var VoucherDetails
     */
    protected $model;

    /**
     * @param VoucherDetails $model
     */
    public function __construct(VoucherDetails $model) {
        $this->model = $model;
    }

}
