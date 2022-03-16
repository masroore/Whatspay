<?php

namespace App\Repositories\Eloquent;

use App\Models\Address;
use App\Repositories\AddressRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class AddressRepository extends BaseRepository implements AddressRepositoryInterface {

    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor
     * 
     * @param Model $model
     */
    public function __construct(Address $model) {
        $this->model = $model;
    }

}