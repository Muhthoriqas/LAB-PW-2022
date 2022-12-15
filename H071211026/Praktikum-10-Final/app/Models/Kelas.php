<?php

namespace App\Models;

use App\Models\Akun;
use App\Models\Tugas;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class);
    }

    public function tugas(){
        return $this->belongsTo(Tugas::class);
    }

    public function akun(){
        return $this->belongsToMany(Akun::class, 'pivotkelas', 'kelas_id', 'akun_id');
    }
}
