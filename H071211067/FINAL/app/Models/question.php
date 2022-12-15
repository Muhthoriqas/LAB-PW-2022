<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = [
        'question_name',
        'question_email',
        'question_phone',
        'question_detail',
    ];

    protected $primaryKey = 'question_id';
}
