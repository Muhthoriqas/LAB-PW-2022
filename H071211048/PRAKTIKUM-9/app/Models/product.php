<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function seller(){
        return $this->belongsTo(seller::class);
    }
}
