<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class seller extends Model
{
    use HasFactory;
    protected $table = 'sellers';
    protected $guarded = ['id'];

    public function products(){
        return $this -> hasMany(product::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(permission::class, 'seller_permissions', 'seller_id', 'permission_id');
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