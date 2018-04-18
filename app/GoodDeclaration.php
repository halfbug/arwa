<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goodDeclaration extends Model
{
    protected $guarded = ['id'];
/*     protected $fillable = [
                'consignor_id','type','customfileno', 'declaration_type','valuation_method', 'prev_ref', 'custom_ofc', 'bankcode','consignee_id', 'igm_egm_no', 'igm_egm_index', 'igm_egm_date', 'dry_port_igm_egm', 'dry_port_igm_egm_index', 'dry_port_igm_egm_date', 'declarant', 'telephone','challan_id','job_no','NTN','STRno_passport_n_date','warehouse_lic_no','transaction_type','lc_dd_no_date','country_destination','curr_name_code','vessel_mode_of_transport','bl_awl_con_no_date','exchangerate','DO_info','DO_amount','excise_info','excise_amount','excise2_info','excise2_amount','plant_challan_info','plant_challan_amount','mandi_recipt','transportation','truck_detain','plant_PPRO','exm','assemnt','agency','total_bill_amount','advance','balance'
            ];
 */
	public function consignor()
    {
        return $this->belongsTo('App\Client','consignor_id','id');
    }
	public function consignee()
    {
        return $this->belongsTo('App\Client','consignee_id','id');
    }
    public function challans()
    {
        return $this->belongsTo('App\Challan','challan_id','id');
    }
}
