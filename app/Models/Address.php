<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_addresses';

    protected $fillable = [
        'user_id',
        'title',
        'address',
        'country',
        'city',
        'phone',
        'latitude',
        'longitude',
        'is_default'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
