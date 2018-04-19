<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class importInvoice extends Model
{
    protected $guarded = ['id'];


    public function agent()
    {
        return $this->belongsTo('App\Client','cf_agent_id','id');
    }
    public function subagent()
    {
        return $this->belongsTo('App\Client','cf_sub_agent_id','id');
    }
    public function consignee()
    {
        return $this->belongsTo('App\Client','consignee_id','id');
    }
}
