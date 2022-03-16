<?php

namespace App\Repositories\Eloquent;

use App\Models\Categories;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Support\Jsonable;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor
     *
     * @param Model $model
     */
    public function __construct(Categories $model) {
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
