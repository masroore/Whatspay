<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\VoucherUsageRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class OrderProductService {

    /**
     * @var VoucherUsageRepositoryInterface
     */
    protected $voucherusageRepository;

    /**
     * @param VoucherUsageRepositoryInterface $voucherusageRepository
     */
    public function __construct(VoucherUsageRepositoryInterface $voucherusageRepository) {
        $this->voucherusageRepository = $voucherusageRepository;
    }





}
