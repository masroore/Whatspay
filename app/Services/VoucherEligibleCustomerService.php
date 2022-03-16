<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\VoucherEligibleCustomerRepositoryInterface;
use App\Repositories\VoucherUsageRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class VoucherEligibleCustomerService {

    /**
     * @var VoucherEligibleCustomerRepositoryInterface
     */
    protected $vouchereligiblecustomerRepository;

    /**
     * @param VoucherEligibleCustomerRepositoryInterface $vouchereligiblecustomerRepository
     */
    public function __construct(VoucherEligibleCustomerRepositoryInterface $vouchereligiblecustomerRepository) {
        $this->vouchereligiblecustomerRepository = $vouchereligiblecustomerRepository;
    }





}
