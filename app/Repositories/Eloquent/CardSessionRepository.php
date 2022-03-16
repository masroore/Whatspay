<?php

namespace App\Repositories\Eloquent;

use App\Models\CardSession;
use App\Repositories\CardSessionRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class CardSessionRepository extends BaseRepository implements CardSessionRepositoryInterface {

    /**
     * @var CardSession
     */
    protected $model;

    /**
     * @param CardSession $model
     */
    public function __construct(CardSession $model) {
        $this->model = $model;
    }

}
