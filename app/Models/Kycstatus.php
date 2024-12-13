<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kycstatus extends Model
{
    protected $table = 'kycstatuses';
    protected $fillable = [
        'status',
        'slug',      
    ];
}
