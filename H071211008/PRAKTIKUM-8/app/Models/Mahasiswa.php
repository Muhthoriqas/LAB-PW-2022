<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $tabel = "mahasiswas";
    protected $fillable = [
        'nim', 'nama', 'alamat', 'fakultas'
    ];
}
