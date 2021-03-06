<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
            /**
             * The attributes that are mass assignable.
             *
             * @var array
             */
            protected $fillable = [
                'first_name', 'last_name', 'father_name','cnic', 'ntn',
                'gender', 'email', 'phone', 'postalcode', 'mobile', 'shipping_address',
                'billing_address', 'country', 'city_state', 'company_name', 'company_phone',
                'company_website', 'company_fax', 'company_address', 'special_note', 'company_docs',
                'type', 'status'
            ];

    /**
     * Get the associated sales tax
     *
     * @var array
     */
    public function salesTax() {
        return $this->hasMany('App\SalesTax');
    }

    public function shippers() {
        return $this->hasMany('App\Order','shipper','id');
    }
    public function invoices() {
        return $this->hasMany('App\Commercial_invoice');
    }
    public function receipts() {
        return $this->hasMany('App\receipt');
    }
    public function bills() {
        return $this->hasMany('App\Bills');
    }
    public function consignor() {
        return $this->hasMany('App\GoodDeclaration','consignor_id','id');
    }
    public function consignee() {
        return $this->hasMany('App\GoodDeclaration','consignee_id','id');
    }
    public function importinvoices() {
        return $this->hasMany('App\ImportInvoice','consignee_id','id');
    }
    public function agentofcontainer() {
        return $this->hasMany('App\ContainerServiceCharges','cf_agent','id');
    }


}
