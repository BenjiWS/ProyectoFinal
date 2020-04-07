<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service_cliente extends Model
{
    protected $table = 'service_cliente';
    protected $fillable = [
        'idService','idCLiente'
    ];
}
