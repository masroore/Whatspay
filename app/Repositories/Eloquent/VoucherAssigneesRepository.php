<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Veriations;
use App\Models\VoucherAssignees;
use App\Models\VoucherDetails;
use App\Repositories\VoucherAssigneesRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class VoucherAssigneesRepository extends BaseRepository implements VoucherAssigneesRepositoryInterface {

    /**
     * @var VoucherAssignees
     */
    protected $model;

    /**
     * @param VoucherAssignees $model
     */
    public function __construct(VoucherAssignees $model) {
        $this->model = $model;
    }

}
