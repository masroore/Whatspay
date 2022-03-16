<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Products;
use App\Models\ProductTags;
use App\Repositories\AttributeRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProductTagsRepositoryInterface;

class ProductTagsRepository extends BaseRepository implements ProductTagsRepositoryInterface {

    /**
     * @var ProductTags
     */
    protected $model;

    /**
     * @param ProductTags $model
     */
    public function __construct(ProductTags $model) {
        $this->model = $model;
    }

}
