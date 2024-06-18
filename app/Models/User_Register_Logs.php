<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Register_Logs extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'description',
        'status',
        'audit_time',
    ];
}
