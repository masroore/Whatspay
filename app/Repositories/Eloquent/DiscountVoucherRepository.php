<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\DiscountVoucher;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Repositories\DiscountVoucherRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class DiscountVoucherRepository extends BaseRepository implements DiscountVoucherRepositoryInterface {

    /**
     * @var DiscountVoucher
     */
    protected $model;

    /**
     * @param DiscountVoucher $model
     */
    public function __construct(DiscountVoucher $model) {
        $this->model = $model;
    }

}
