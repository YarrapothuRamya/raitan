<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kycs extends Model
{
    protected $table ="Kycs";
    protected $fillable = [
        'operator_name',     // The name of the operator
        'aadhar_card',       // The path to the Aadhar card file
        'pan_card',          // The path to the PAN card file
        'machine_rc',        // The path to the Machine RC file
        'driving_licence',   // The path to the Driving License file
        'business_id',
        'user_id',
        'business_name',
        'category',
    ];
}