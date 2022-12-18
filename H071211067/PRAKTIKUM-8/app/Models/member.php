<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $fillable = ['member', 'nama', 'alamat'];
    protected $table = 'member';
    public $timestamps = false;
}
