<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shipper', 'consignee', 'notify_party','voyage_no', 'loading_at',
        'discharge_at', 'delivery_at', 'marks_number', 'marks_number', 'goods_description', 'gross_weight',
        'measurement', 'containers_no', 'movement', 'freight', 'original_no','amount','date',
        'remarks'
    ];

    /**
     * Get the client that owns the sales tax.
     */
    public function shippers()
    {
        return $this->belongsTo('App\Client','shipper','id');
    }

    /**
     * Get the client that owns the sales tax.
     */
    public function consignees()
    {
        return $this->belongsTo('App\Client','consignee','id');
    }

    /**
     * Get the client that owns the sales tax.
     */
    public function notifyParties()
    {
        return $this->belongsTo('App\Client', 'notify_party','id' );
    }
	
	public function containersinfo() {
        return $this->hasMany('App\InfoOfContainer','order_id','id');
    }

}
