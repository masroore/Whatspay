<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\ProductAddOns;
use App\Models\Products;
use App\Models\ProductsCustomFields;
use App\Models\ProductVariationItems;
use App\Repositories\AttributeRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\ProductsCustomFieldsRepositoryInterface;
use App\Repositories\ProductVariationItemsRepositoryInterface;

class ProductVariationItemsRepository extends BaseRepository implements ProductVariationItemsRepositoryInterface {

    /**
     * @var ProductVariationItems|Model
     */
    protected $model;

    /**
     * @param ProductVariationItems $model
     */
    public function __construct(ProductVariationItems $model) {
        $this->model = $model;
    }

}
