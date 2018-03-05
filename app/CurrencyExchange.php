<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class currencyExchange extends Model
{
    protected $fillable = ['name','value','date'];
}
