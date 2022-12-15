<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories;
use App\Models\sellers;
use Illuminate\Support\Carbon;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'seller_id',
        'category_id',
        'price',
        'status',
    ];
    public function seller() {
        return $this->belongsTo(sellers::class);
    }
    public function category() {
        return $this->belongsTo(categories::class);
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
