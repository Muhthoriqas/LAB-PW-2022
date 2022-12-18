<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sellers;
use App\Models\permissions;
use Illuminate\Support\Carbon;
class sellers_permissions extends Model
{
    use HasFactory;
    protected $fillable = [
        'sellers_id',
        'permissions_id',
    ];
    public function seller() {
        return $this->belongsToMany(sellers::class);
    }
    public function permission() {
        return $this->belongsToMany(permissions::class);
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
