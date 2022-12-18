<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    protected $fillable = [
        'coupon_code',
        'coupon_value',
        'cart_min_value',
        'coupon_type',
        'coupon_status',
        'expired_on',
        'added_on',
    ];

    protected $primaryKey = 'coupon_id';
}
