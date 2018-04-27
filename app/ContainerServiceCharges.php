<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class containerServiceCharges extends Model
{
	    protected $guarded = ['id'];

/*     protected $fillable = [
                'vessel','voyage','arr_date','bill_land_no','index_no', 'cf_agent', 'container_no', 'size', 'gate_out', 'gate_in', 'total_days', 'free_days',
                'cass_amount', 'cass_amount_currency', 'amount_charged_on_distance', 'stamp_duty_on_BE', 'stamp_duty_currency' ,'detention_days', 'total_usd','total_rupees',
				'total_detention_charges','transportation_charges','plugging_charges','container_cleaning_cost','container_repairing_cost', 'total_charges',
				 'container_deposit_recieved', 'balance_amt'
				
            ];
 */
      public function agentofcontainer()
    {
        return $this->belongsTo('App\Clients','cf_agent','id');
    }
}
