<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse_power_implements extends Model
{
    use HasFactory;
    protected $table = 'horse_power_implements';
    protected $fillable = [
        'name',
        'image',
        'machine_id',
        'status',        
    ];
}
