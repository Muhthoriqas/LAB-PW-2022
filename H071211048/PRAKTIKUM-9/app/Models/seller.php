<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class seller extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(product::class);
    }

}
