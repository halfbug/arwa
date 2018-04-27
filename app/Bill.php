<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{

	    protected $guarded = ['id'];
/*     protected $fillable = [
                'client_id','bl_no','bill_no', 'igm_no','contract_no', 'date', 'no_of_packages', 'description','per_s_s', 'arr_date', 'from', 'for', 'index_no', 'cash_no', 'value_curr', 'container_no', 'challan_id','gd_id','importduty_itax_salestax_info','importduty_itax_salestax_amount','weboc_token_info','weboc_token_amount','sales_tax','detention_info','detention_amount','kict_info','kict_amount','plugging_detention_info','plugging_detention_amount','DO_info','DO_amount','excise_info','excise_amount','excise2_info','excise2_amount','plant_challan_info','plant_challan_amount','mandi_recipt','transportation','truck_detain','plant_PPRO','exm','assemnt','agency','total_bill_amount','advance','balance'
            ];
 */    public function client()
    {
        return $this->belongsTo('App\Client','client_id','id');
    }
    public function challan()
    {
        return $this->belongsTo('App\Challan','challan_id','id');
    }
    public function gd()
    {
        return $this->belongsTo('App\GoodDeclaration','gd_id','id');
    }
}
