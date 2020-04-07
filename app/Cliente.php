<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Cliente extends Authenticatable
{
    protected $guard = 'cliente'; 

    protected $fillable = [
        'ci','name','lastname','email','phone','address','number_Card_Credit','number_CVV','date_Card','username','password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
