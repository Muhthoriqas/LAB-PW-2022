<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerPermission extends Model
{
    use HasFactory;

    protected $table = "seller_permissions";
    protected $fillable = ['seller_id', 'permission_id'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function seller() {

        return $this->belongsTo(seller::class);

    }

    public function permission()
    {
        return $this->belongsTo(permission::class);
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
