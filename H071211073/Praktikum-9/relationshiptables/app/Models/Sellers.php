<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'gender',
        'no_hp',
        'status'
    ];

    # seller hasMany product
    public function products() {
        return $this->hasMany(Products::class);
    }
    
    # seller manyToMany permission -> pivot table 
    public function sellers_permissions() {
        return $this->hasMany(sellers_permissions::class);
    }
}
