<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\OrderPaymentsExtraDetail;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\OrderPaymentsExtraDetailRepositoryInterface;
use App\Repositories\OrdersRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class OrderPaymentsExtraDetailRepository extends BaseRepository implements OrderPaymentsExtraDetailRepositoryInterface {

    /**
     * @var OrderPaymentsExtraDetail
     */
    protected $model;

    /**
     * @param OrderPaymentsExtraDetail $model
     */
    public function __construct(OrderPaymentsExtraDetail $model) {
        $this->model = $model;
    }

}
