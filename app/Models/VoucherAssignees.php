<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VoucherAssignees extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable=[
        'store_id',
        'voucher_id'
    ];
}
