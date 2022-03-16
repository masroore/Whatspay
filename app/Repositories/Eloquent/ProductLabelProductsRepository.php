<?php

namespace App\Repositories\Eloquent;

use App\Models\ProductLabelProducts;
use App\Models\ProductLabels;
use App\Repositories\ProductLabelProductsRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Support\Jsonable;

class ProductLabelProductsRepository extends BaseRepository implements ProductLabelProductsRepositoryInterface {

    /**
     * @var ProductLabelProducts
     */
    protected $model;

    /**
     * @param ProductLabelProducts $model
     */
    public function __construct(ProductLabelProducts $model) {
        $this->model = $model;
    }

        /**
     * Find all by column With Pagination.
     *
     * @param array $where
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Collection
     */
    public function findAllByPagination(
        array $where,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ) {
        return $this->model->select($columns)->with($relations)->where($where)->paginate(5)->toArray();
    }

}
