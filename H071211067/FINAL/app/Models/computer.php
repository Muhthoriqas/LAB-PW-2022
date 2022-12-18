<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    protected $fillable = [
        'computer_name',
        'computer_detail',
        'computer_image',
        'computer_status',
    ];

    protected $primaryKey = 'computer_id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
