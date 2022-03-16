<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherEligibleCustomer;
use App\Models\VoucherUsage;
use App\Repositories\VoucherEligibleCustomerRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class VoucherEligibleCustomerRepository extends BaseRepository implements VoucherEligibleCustomerRepositoryInterface {

    /**
     * @var VoucherEligibleCustomer
     */
    protected $model;

    /**
     * @param VoucherEligibleCustomer $model
     */
    public function __construct(VoucherEligibleCustomer $model) {
        $this->model = $model;
    }

}
