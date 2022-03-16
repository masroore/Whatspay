<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPaymentsExtraDetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_id',
        'customer_id',
        'store_id',
        'description',
        'payment_detail',
    ];
}
