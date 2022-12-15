<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers_Permissions extends Model
{
    use HasFactory;
    public $table = "sellers_permissions"; 
    protected $fillable = [
        'seller_id',
        'permission_id'
    ];
}
