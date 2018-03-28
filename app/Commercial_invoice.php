<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commercial_invoice extends Model
{
            protected $fillable = [
                'client_id', 'invoice_to','invoice_no', 'invoice_date','S/C_NC', 'S/C_NC_date','B/L_no', 'container_no', 'HScode', 'countryoforigin', 'goods_description', 'goods_qty','goods_unit_price', 'amount', 'amount_in_words'
            ];
    public function client()
    {
        return $this->belongsTo('App\Client','client_id','id');
    }

			
			}
