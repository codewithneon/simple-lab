<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'is_admin',
        'password',
        'status',
        'email',
        'image',
        'name',
    ];
    protected $hidden = [
        'remember_token',
        'password',
    ];
    protected $casts = [

        'password' => 'hashed',
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
    ];
}
