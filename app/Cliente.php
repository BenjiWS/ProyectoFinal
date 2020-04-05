<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'ci','name','lastname','email','phone','address','number_Card_Credit','number_CVV','date_Card','state'
        ,'username','password'
    ];
}
