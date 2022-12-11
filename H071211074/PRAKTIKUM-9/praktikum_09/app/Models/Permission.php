<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = "permissions";
    protected $fillable = ['name', 'description', 'status'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function seller() {

        return $this->belongsToMany(seller::class, 'seller_permission', 'seller_id', 'permission_id');

    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('D M Y');
    }
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('D M Y');
    }

}
