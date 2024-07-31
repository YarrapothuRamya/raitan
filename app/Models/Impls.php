<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impls extends Model
{
    use HasFactory;
    protected $table = 'impls';
    protected $fillable = [
        'name',
        'image',
        'machine_id',
        'status',        
    ];
}
