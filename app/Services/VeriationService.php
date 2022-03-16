<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\VeriationRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class VeriationService {

    /**
     * @var $veriationRepository
     */
    protected $veriationRepository;

    /**
     * AttributeSetService constructor
     *
     * @param VeriationRepositoryInterface $veriationRepository
     */
    public function __construct(VeriationRepositoryInterface $veriationRepository) {
        $this->veriationRepository = $veriationRepository;
    }





}
