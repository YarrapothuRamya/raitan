<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Common_logs extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'user_id',
        'admin_phone',
        'user_phone',
        'description',
        'status',
        'audit_time',
        'ipaddress',
    ];
}
