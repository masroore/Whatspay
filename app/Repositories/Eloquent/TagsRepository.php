<?php

namespace App\Repositories\Eloquent;

use App\Models\Tags;
use App\Repositories\TagsRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Support\Jsonable;

class TagsRepository extends BaseRepository implements TagsRepositoryInterface {

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor 
     * 
     * @param Model $model
     */
    public function __construct(Tags $model) {
        $this->model = $model;
    }

}