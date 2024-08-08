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
        'name',
        'mobile',
        'email',
        'whatsapp_no',
        'alt_email',
        'alt_mobile',
        'alt_whatsapp',
        'landline',
        'status',
        'title',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     */
}
