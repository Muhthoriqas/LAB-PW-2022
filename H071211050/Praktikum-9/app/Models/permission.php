<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class permission extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function seller()
    {
        return $this->belongsToMany(seller::class);
    }

    public function setNameAttribute($value){  
        $this->attributes['name'] = strtolower($value);
    }

    public function getCreatedAtAttribute($value){
    return Carbon::parse($value)->format('d/m/Y');
    }
    
    public function getUpdatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
}
