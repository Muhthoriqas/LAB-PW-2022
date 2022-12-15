<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KelasMatakuliah extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function matakuliah(){
    //     return $this->belongsToMany(Matakuliah::class, 'kelas_matakuliahs', 'kelas_id', 'matakuliah_id');
    // }

    // public function kelas(){
    //     return $this->belongsToMany(Kelas::class, 'kelas_matakuliahs', 'matakuliah_id', 'kelas_id');
    // }
}
