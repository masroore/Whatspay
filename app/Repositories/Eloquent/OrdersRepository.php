<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Orders;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\OrdersRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class OrdersRepository extends BaseRepository implements OrdersRepositoryInterface {

    /**
     * @var Orders
     */
    protected $model;

    /**
     * @param Orders $model
     */
    public function __construct(Orders $model) {
        $this->model = $model;
    }

}
