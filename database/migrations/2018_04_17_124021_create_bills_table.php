<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');            
            $table->string('bill_no');
           $table->integer('date');
            $table->string('bl_no')->nullable();
            $table->string('contract_no')->nullable();
            $table->string('no_of_packages')->nullable();
            $table->text('description')->nullable();
            $table->string('per_s_s')->nullable();
           $table->integer('arr_date')->nullable();
            $table->string('from')->nullable();
            $table->string('for')->nullable();
             $table->smallInteger('igm_no')->nullable();
            $table->string('index_no')->nullable();
            $table->string('cash_no')->nullable();
            $table->string('value_curr')->nullable();
            $table->string('container_no')->nullable();
			$table->integer('challan_id')->unsigned()->index();
            $table->foreign('challan_id')->references('id')->on('challans')->onDelete('cascade');            
			$table->integer('gd_id')->unsigned()->index();
            $table->foreign('gd_id')->references('id')->on('good_declarations')->onDelete('cascade');            
            $table->string('importduty_itax_salestax_info')->nullable();
            $table->integer('importduty_itax_salestax_amount')->nullable();
            $table->string('weboc_token_info')->nullable();
            $table->integer('weboc_token_amount')->nullable();
            $table->integer('sales_tax')->nullable();
            $table->string('detention_info')->nullable();
            $table->integer('detention_amount')->nullable();
            $table->string('kict_info')->nullable();
            $table->integer('kict_amount')->nullable();
            $table->string('plugging_detention_info')->nullable();
            $table->integer('plugging_detention_amount')->nullable();
            $table->string('DO_info')->nullable();
            $table->integer('DO_amount')->nullable();
            $table->string('excise_info')->nullable();
            $table->integer('excise_amount')->nullable();
            $table->string('excise2_info')->nullable();
            $table->integer('excise2_amount')->nullable();
            $table->string('plant_challan_info')->nullable();
            $table->integer('plant_challan_amount')->nullable();
            $table->integer('mandi_recipt')->nullable();
            $table->integer('transportation')->nullable();
            $table->integer('truck_detain')->nullable();
            $table->integer('plant_PPRO')->nullable();
            $table->integer('exm')->nullable();
            $table->integer('assemnt')->nullable();
            $table->integer('agency')->nullable();
           $table->integer('total_bill_amount');
           $table->integer('advance')->nullable();
           $table->integer('balance')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
