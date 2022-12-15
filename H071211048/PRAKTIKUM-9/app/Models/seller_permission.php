<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller_permission extends Model
{
    use HasFactory;
    public function seller(){
        return $this->belongsTo(seller::class);
    }

    public function permission(){
        return $this->belongsTo(permission::class);
    }
}
