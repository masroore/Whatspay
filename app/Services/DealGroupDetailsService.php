<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\DealRepositoryInterface;
use App\Repositories\VoucherUsageRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class DealGroupDetailsService {

    /**
     * @var DealRepositoryInterface
     */
    protected $dealRepository;

    /**
     * @param DealRepositoryInterface $dealRepository
     */
    public function __construct(DealRepositoryInterface $dealRepository) {
        $this->dealRepository = $dealRepository;
    }





}
