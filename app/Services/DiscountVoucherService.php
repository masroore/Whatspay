<?php

namespace App\Services;

use App\Exceptions\Handler;
use App\Models\Categories;
use App\Models\DiscountVoucher;
use App\Models\Products;
use App\Repositories\DiscountVoucherRepositoryInterface;

use App\Repositories\Eloquent\VoucherUsageRepository;
use App\Repositories\VoucherAssigneesRepositoryInterface;
use App\Repositories\VoucherDetailsRepositoryInterface;
use Carbon\Carbon;
use Exception;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Symfony\Component\Console\Helper\HelperInterface;

class DiscountVoucherService {

    /**
     * @var DiscountVoucherRepositoryInterface
     */
    protected $discountvoucherRepository;
    protected $voucherassigneesRepository;
    protected $voucherdetailsRepository;
    protected $voucherusageRepository;

    /**
     * @param DiscountVoucherRepositoryInterface $discountvoucherRepository
     * @param VoucherAssigneesRepositoryInterface $voucherassigneesRepository
     * @param VoucherDetailsRepositoryInterface $voucherdetailsRepository
     * @param VoucherUsageRepository $voucherusageRepository
     */

    public function __construct(
        DiscountVoucherRepositoryInterface $discountvoucherRepository,
        VoucherAssigneesRepositoryInterface $voucherassigneesRepository,
        VoucherDetailsRepositoryInterface $voucherdetailsRepository,
        VoucherUsageRepository $voucherusageRepository
    )
    {
        $this->discountvoucherRepository = $discountvoucherRepository;
        $this->voucherassigneesRepository = $voucherassigneesRepository;
        $this->voucherdetailsRepository = $voucherdetailsRepository;
        $this->voucherusageRepository = $voucherusageRepository;
    }


    public function store(Request $request){

        DB::beginTransaction();
        try {
            $request['code']=promoCode();
            if ($request->discount_type=='fixed_amount'){

                if ($request->voucher_type=='category'){
                    foreach ($request->voucherdetails as $value){
                        $data=Categories::where('id',$value['voucherable_id'])->withMax('products as max_price','price')->first();
                        if ($request->discount_value>$data['max_price']){
                            throw new InvalidArgumentException('Discount Value is greator then min Product value that is '.$data['max_price']);
                        };
                    }
                }
                if ($request->voucher_type=='product'){
                    foreach ($request->voucherdetails as $value){
                        $data=Products::where('id',$value['voucherable_id'])->min('price');
                        if ($request->discount_value > $data){
                            throw new InvalidArgumentException('Discount Value is greator then min Product value that is '.$data);
                        };
                    }
                }
            }
            $voucher=$this->discountvoucherRepository->create($request->input());
            $voucher_id=$voucher->id;
            $voucher_store=$this->voucherassigneesRepository->create([
                'voucher_id'=>$voucher_id,
                'store_id'=>$request->store_id,
            ]);
            if (isset($request['voucherdetails']) && $request['voucherdetails'][0]!=""){
                $voucherable_type='';
                switch ($request['voucher_type']){

                    case'entire';
                        $voucherable_type='App\Models\Orders';
                        break;

                    case'over';
                        $voucherable_type='App\Models\Orders';
                        break;

                    case'product';
                        $voucherable_type='App\Models\Products';
                        break;

                    case'category';
                        $voucherable_type='App\Models\Categories';
                        break;
                }
                foreach ($request['voucherdetails'] as $detail){
                         $this->voucherdetailsRepository->create([
                             'voucher_id'=>$voucher_id,
                             'voucherable_type'=>$voucherable_type,
                             'voucherable_id'=>$detail['voucherable_id']
                         ]);

                }
            }
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
            throw new InvalidArgumentException($e->getMessage());
        }
        return $voucher;
    }

    public function checkVoucher($voucher){
        try {
        $voucher_details=DiscountVoucher::

              where('code'
                ,$voucher)
            ->where('status'
                ,'='
                ,1)
            ->where('start_date',
                '<=',
                gmdate(now()))
            ->where(function
            ($q) {
                $q->where('never_expires', 1);
                $q->Orwhere('end_date', '>=', gmdate(now()));
            })
            ->Where(
                function ($k){
                $k->where('everytime',1);

            $k->orWhere(function ($r){
                $r->where('start_time','<',gmdate("H:i:s"));
                $r->Where('end_time','>',gmdate("H:i:s"));
            });
                     })
            ->withCount('usage'
                ,'usagetotal')
            ->first();
           if(!($voucher_details->limit_type=='unlimited')){

               if(($voucher_details->limit_type=='per_customer'&&!($voucher_details->usage_count<$voucher_details->limit_value))
                 ||($voucher_details->limit_type=='total'&&!( $voucher_details->usagetotal_count<$voucher_details->limit_value))){

                   throw new InvalidArgumentException('invalid Code');

               }


           }
       } catch(Exception $e) {
            throw new InvalidArgumentException($e->getMessage());
            }
        return $voucher_details;
    }

    public function destroy($id){
        try {

        $delete_voucher=$this->discountvoucherRepository->deleteById($id);

        } catch(Exception $e) {

            throw new InvalidArgumentException($e->getMessage());

        }
        return $delete_voucher;
    }

    public function viewAll(){

    try{
        $vouchers=$this->discountvoucherRepository->all(['*'],['details.voucherable']);

    } catch(Exception $e) {

        throw new InvalidArgumentException($e->getMessage());
    }
        return $vouchers;
    }

    public function view($id){

        try{
            $voucher=$this->discountvoucherRepository->findById($id,['*'],['details.voucherable']);

        } catch(Exception $e) {

            throw new InvalidArgumentException($e->getMessage());
        }
        return $voucher;
    }

    public function updateVoucher(Request $request,$id){
        DB::beginTransaction();
        try{
            if ($request->discount_type=='fixed_amount'){

                if ($request->voucher_type=='category'){
                    foreach ($request->voucherdetails as $value){
                        $data=Categories::where('id',$value['voucherable_id'])->withMax('products as max_price','price')->first();
                        if ($request->discount_value>$data['max_price']){
                            throw new InvalidArgumentException('Discount Value is greator then min Product value that is '.$data['max_price']);
                        };
                    }
                }
                if ($request->voucher_type=='product'){
                    foreach ($request->voucherdetails as $value){
                        $data=Products::where('id',$value['voucherable_id'])->min('price');

                        if ($request->discount_value > $data){


                            throw new InvalidArgumentException('Discount Value is greator then min Product value that is '.$data);
                        };
                    }
                }
            }
            $voucher=$this->discountvoucherRepository->updateByColumn(
                ['id'=>$id],
                [
                    'name'=>$request->name,
                    'code'=>$request->code,
                    'discount_type'=>$request->discount_type,
                    'discount_value'=>$request->discount_value,
                    'payment_method'=>$request->payment_method,
                    'countries'=>$request->countries,
                    'limit_type'=>$request->limit_type,
                    'limit_value'=>$request->limit_value,
                    'with_promotion'=>$request->with_promotion,
                    'created_by'=>$request->created_by,
                    'never_expires'=>$request->never_expires,
                    'status'=>$request->status,
                    'start_date'=>$request->start_date,
                    'end_date'=>$request->end_date,
                    'start_time'=>$request->start_time,
                    'end_time'=>$request->end_time,
                    'everytime'=>$request->everytime_time,
                    'min_order'=>$request->min_order
                ]
            );
            $voucher_id=$id;
            if (isset($request['voucherdetails']) && $request['voucherdetails'][0]!=""){
                $voucherable_type='';
                switch ($request['voucher_type']){

                    case'entire';
                        $voucherable_type='App\Models\Orders';
                        break;

                    case'over';
                        $voucherable_type='App\Models\Orders';
                        break;

                    case'product';
                        $voucherable_type='App\Models\Products';
                        break;

                    case'category';
                        $voucherable_type='App\Models\Categories';
                        break;
                }
                foreach ($request['voucherdetails'] as $detail){
                   if(!isset($detail['id']))$detail['id']=0;

                    $this->voucherdetailsRepository->updateGetModel(
                        [
                            'id'=>$detail['id'],
                            'voucher_id'=>$id
                        ],
                        [

                        'voucherable_type'=>$voucherable_type,
                        'voucherable_id'=>$detail['voucherable_id']
                    ]);


                }
            }
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();
            throw new InvalidArgumentException($e->getMessage());
        }
        return $voucher;
    }
}
