<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['id', 'name', 'seller_id', 'category_id', 'price', 'status'];

    public function seller(){
        return $this->belongsTo(seller::class);
    }

    public function category(){
        return $this->belongsTo(category::class);
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
