<?php

namespace App\Repositories\Eloquent;

use App\Models\Attribute;
use App\Models\Comment;
use App\Models\Veriations;
use App\Repositories\CommentRepositoryInterface;
use App\Repositories\VeriationRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface {

    /**
     * @var Comment
     */
    protected $model;

    /**
     * @param Comment $model
     */
    public function __construct(Comment $model) {
        $this->model = $model;
    }

}
