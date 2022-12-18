<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class category extends Model
{
    use HasFactory;
    protected $table = "categorys";
    protected $guarded = ['id'];
    protected $fillable = ['id', 'name', 'status'];

    public function products(){
        return $this -> hasMany(product::class);
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
