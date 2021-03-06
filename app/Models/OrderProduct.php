<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_id',
        'product_id',
        'product_name',
        'qty',
        'price',
        'discount_amount',
        'add_ons_detail',
        'add_ons_amount',
    ];
}
