<?php

namespace App\Repositories\Eloquent;

use App\Models\VeriationItems;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\VeriationItemsRepositoryInterface;

class VeriationItemsRepository extends BaseRepository implements VeriationItemsRepositoryInterface {

    /**
     * @var VeriationItems
     */
    protected $model;

    /**
     * @param VeriationItems $model
     */
    public function __construct(VeriationItems $model) {
        $this->model = $model;
    }

}
