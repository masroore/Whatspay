<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\OrderHistories;
use App\Models\Orders;
use App\Models\Veriations;
use App\Models\VoucherDetails;
use App\Models\VoucherUsage;
use App\Repositories\OrderHistoriesRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class OrderHistoriesRepository extends BaseRepository implements OrderHistoriesRepositoryInterface {

    /**
     * @var Orders
     */
    protected $model;

    /**
     * @param Orders $model
     */
    public function __construct(OrderHistories $model) {
        $this->model = $model;
    }

}
