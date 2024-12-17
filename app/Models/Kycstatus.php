<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kycstatus extends Model
{
    protected $table = 'kycstatus';
    protected $fillable = [
        'status',
        'slug',      
    ];
}
