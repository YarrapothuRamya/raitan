<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_role extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role_id',
        'role_permission_status',
    ];
}
