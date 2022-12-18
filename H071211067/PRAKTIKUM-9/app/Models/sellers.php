<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;
use App\Models\sellers_permissions;
use Illuminate\Support\Carbon;
use mysqli;

class sellers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Address',
        'Gender',
        'no_hp',
        'status',
    ];
    public function products() {
        return $this->hasMany(products::class);
    }
    public function seller_permission() {
        return $this->hasMany(sellers_permissions::class);
    }
    public function setNameAttribute($value){  
        $this->attributes['name'] = $value;
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
        }
        
    public function getUpdatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
}
