<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status'
    ];

    # product hasOne category
    public function products () {
        return $this->hasOne(Products::class);
    }
}
