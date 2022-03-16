<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\OrderProduct;
use App\Models\Orders;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\OrderProductRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class OrderProductRepository extends BaseRepository implements OrderProductRepositoryInterface {

    /**
     * @var OrderProduct
     */
    protected $model;

    /**
     * @param OrderProduct $model
     */
    public function __construct(OrderProduct $model) {
        $this->model = $model;
    }

}
