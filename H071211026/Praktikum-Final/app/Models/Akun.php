<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Akun extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];

    public function kelas(){
        return $this->belongsToMany(Kelas::class, 'pivotkelas', 'akun_id', 'kelas_id');
    }

}
