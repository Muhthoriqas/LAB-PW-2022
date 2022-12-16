<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class seller_permission extends Model
{
    use HasFactory;
    protected $table = 'seller_permissions';
    protected $guarded = ['id'];

    public function sellers()
    {
        return $this->belongsToMany(seller::class, 'seller_permissions', 'permission_id','seller_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(permission::class, 'seller_permissions', 'seller_id','permission_id');
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
        
    public function getUpdatedAtAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }

}
