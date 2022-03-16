<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\VeriationItemsRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class VeriationItemService {

    /**
     * @var $veriationitemRepository
     */
    protected $veriationitemRepository;

    /**
     * AttributeSetService constructor
     *
     * @param VeriationItemsRepositoryInterface $veriationitemRepository
     */
    public function __construct(VeriationItemsRepositoryInterface $veriationitemRepository) {
        $this->veriationitemRepository = $veriationitemRepository;
    }





}
