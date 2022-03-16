<?php

namespace App\Repositories\Eloquent;

use App\Models\Role;
use App\Repositories\RoleRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface {

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor
     *
     * @param Model $model
     */
    public function __construct(Role $model) {
        $this->model = $model;
    }

}
