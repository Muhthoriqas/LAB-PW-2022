<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function kelas(){
    //     return $this->belongsToMany(Kelas::class, 'kelas_matakuliahs', 'matakuliah_id', 'kelas_id');
    // }
    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}
