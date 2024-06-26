<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Login_Logs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_created_at',
        'phone',
        'description',
        'status',
        'audit_time',
        'ipaddress',
    ];
}
