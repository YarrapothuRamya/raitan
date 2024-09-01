<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Business_contact extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'business_name',
        'mobile',
        'pincode',
        'block_no',
        'street',
        'area',
        'city',
        'state',
        'status',
        'title',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     */
    // protected function casts(): array
    // {
    //     return [
    //         // 'email_verified_at' => 'datetime',
    //         'password' => 'hashed',
    //     ];
    // }
}
