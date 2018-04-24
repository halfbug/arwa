<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoOfContainer extends Model
{
    protected $guarded = ['id'];
		public function containersinfo()
    {
        return $this->belongsTo('App\Order','order_id','id');
    }

}
