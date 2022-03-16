<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\VoucherDetailsRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class VoucherDetailsService {

    /**
     * @var $voucherdetailsRepository
     */
    protected $voucherdetailsRepository;

    /**
     * @param VoucherDetailsRepositoryInterface $voucherdetailsRepository
     */
    public function __construct(VoucherDetailsRepositoryInterface $voucherdetailsRepository) {
        $this->voucherdetailsRepository = $voucherdetailsRepository;
    }





}
