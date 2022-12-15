<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;

class categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
    ];
    public function category() {
        return $this->hasMany(products::class);
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
