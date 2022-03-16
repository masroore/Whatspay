<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\VoucherAssigneesRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class VoucherAssigneesService {

    /**
     * @var VoucherAssigneesRepositoryInterface
     */
    protected $VoucherAssigneesRepository;

    /**
     * @param VoucherAssigneesRepositoryInterface $VoucherAssigneesRepository
     */
    public function __construct(VoucherAssigneesRepositoryInterface $VoucherAssigneesRepository) {
        $this->VoucherAssigneesRepository = $VoucherAssigneesRepository;
    }





}
