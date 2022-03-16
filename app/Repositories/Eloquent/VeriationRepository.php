<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Veriations;
use App\Repositories\VeriationRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class VeriationRepository extends BaseRepository implements VeriationRepositoryInterface {

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor
     *
     * @param Model $model
     */
    public function __construct(Veriations $model) {
        $this->model = $model;
    }

}
