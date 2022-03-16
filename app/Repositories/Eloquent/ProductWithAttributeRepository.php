<?php

namespace App\Repositories\Eloquent;

use App\Models\ProductWithAttribute;
use App\Repositories\ProductWithAttributeRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\ProductAddOnsRepositoryInterface;

class ProductWithAttributeRepository extends BaseRepository implements ProductWithAttributeRepositoryInterface {

    /**
     * @var ProductWithAttribute
     */
    protected $model;

    /**
     * @param ProductWithAttribute $model
     */
    public function __construct(ProductWithAttribute $model) {
        $this->model = $model;
    }

}
