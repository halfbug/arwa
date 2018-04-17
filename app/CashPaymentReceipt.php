<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cashPaymentReceipt extends Model
{
    protected $fillable = [
                'client_id','cash_no','gd_no', 'igm_no','blawb_no', 'date', 'amount_in_words', 'vessel_name','agent_name', 'package_type', 'total_amount', 'no_of_package', 'payee_id', 'paymentbreakup', 'payment_mode', 'psid_no', 'bank', 'city','branch','instrument_no','Payment_amount'
            ];
    public function client()
    {
        return $this->belongsTo('App\Client','client_id','id');
    }
}
