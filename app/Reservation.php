<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'idRoom','idCliente','starDate','endDate','type','state','penalty','username','password','stateUsername' ];
}
