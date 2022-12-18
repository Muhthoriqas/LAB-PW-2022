<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function file(){
        return $this->belongsTo(File::class);
    }
}
