<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotKelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "pivotkelas";

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function akun(){
        return $this->belongsTo(Akun::class);
    }
}
