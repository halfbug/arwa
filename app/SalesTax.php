<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesTax extends Model
{
    protected $fillable = ['client_id','value','date'];

    /**
     * Get the client that owns the sales tax.
     */
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

}
