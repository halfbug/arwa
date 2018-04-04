<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    protected $fillable = [
                'client_id','received_from','receipt_no', 'printed_on','receipt_nos', 'date', 'amount_in_words', 'payorder_no','payorder_amount', 'drawn_on', 'total_amount', 'on_account_of', 'bl_no', 'index_no', 'vessel_no', 'remarks'
            ];
    public function client()
    {
        return $this->belongsTo('App\Client','client_id','id');
    }
}
