<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Reservation extends Authenticatable
{
    protected $guard = 'reservation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idRoom','idCliente','starDate','endDate','type','state','penalty','username','password','stateUsername' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
