<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table ='user';

    protected $fillable = [
        'nama', 'alamat', 'usia', 'telepon', 'password', 'remember_token', 'email', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
