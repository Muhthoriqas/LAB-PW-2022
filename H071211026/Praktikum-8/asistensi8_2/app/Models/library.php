<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;

    protected $table = "libraries";
    protected $primarykey = "id";
    protected $fillable = ['nim', 'nama', 'fakultas', 'alamat'];
    protected $guarded = ['id'];
}
