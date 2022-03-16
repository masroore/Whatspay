<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\ProductAddOns;
use App\Models\ProductVariations;
use App\Repositories\ProductVariationsRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\ProductAddOnsRepositoryInterface;

class ProductVariationsRepository extends BaseRepository implements ProductVariationsRepositoryInterface {

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor
     *
     * @param Model $model
     */
    public function __construct(ProductVariations $model) {
        $this->model = $model;
    }


    public function getVariationByAttributes($configurableProductId, array $attributes)
    {
        $allRelatedVariations = $this->model
            ->where('configurable_product_id', $configurableProductId)
            ->distinct()
            ->with('variationItems')
            ->get();

        $matchedVariation = $allRelatedVariations
            ->filter(function ($value) use ($attributes) {
                $items = $value->variationItems->pluck('attribute_id')->toArray();

                $items = array_unique($items);

                return array_equal(array_unique($attributes), $items);
            });

//        return $this->applyBeforeExecuteQuery($matchedVariation, true)->first();
        return $matchedVariation->first();
    }


}
