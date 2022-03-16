<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Repositories\DealGroupsRepositoryInterface;
use App\Repositories\DealRepositoryInterface;
use App\Repositories\VoucherUsageRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class DealGroupsService {

    /**
     * @var DealGroupsRepositoryInterface
     */
    protected $dealgroupsrepository;

    /**
     * @param DealGroupsRepositoryInterface $dealgroupsrepository
     */
    public function __construct(DealGroupsRepositoryInterface $dealgroupsrepository) {
        $this->dealgroupsrepository = $dealgroupsrepository;
    }





}
