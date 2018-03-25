<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challan extends Model
{
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = [
                'headofaccount','trader_id','challan_no','B/E_GD_no','B/E_cash_no', 'clearing_agent', 'no_of_container', 'assessed_value', 'assessed_value_currency', 'gross_weight', 'net_weight', 'cass_amount_percentage',
                'cass_amount', 'cass_amount_currency', 'amount_charged_on_distance', 'stamp_duty_on_BE', 'stamp_duty_currency' ,
                'total_amount', 'date','GD_date','payment_date'
            ];

    /**
     * Get the associated sales tax
     *
     * @var array
     
    public function salesTax() {
        return $this->hasMany('App\SalesTax');
    }

    public function shippers() {
        return $this->hasMany('App\Order','shipper','id');
    }*/


}
