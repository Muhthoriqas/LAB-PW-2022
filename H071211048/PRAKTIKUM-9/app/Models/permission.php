<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    public function seller(){
        return $this->belongsToMany(seller::class, 'seller_permissions', 'seller_id', 'permission_id');
    }
}
