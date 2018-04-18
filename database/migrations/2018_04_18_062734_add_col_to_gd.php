<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColToGd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('good_declarations', function (Blueprint $table) {
			$table->integer('consignor_id')->unsigned()->index();
            $table->foreign('consignor_id')->references('id')->on('clients')->onDelete('cascade');            
            $table->string('type')->nullable();
            $table->string('customfileno')->nullable();
            $table->string('declaration_type')->nullable();
            //$table->integer('date');
            $table->string('valuation_method')->nullable();
            $table->string('prev_ref')->nullable();
            $table->string('custom_ofc')->nullable();
            $table->string('bankcode')->nullable();
			$table->integer('consignee_id')->unsigned()->index();
            $table->foreign('consignee_id')->references('id')->on('clients')->onDelete('cascade');            
            $table->string('igm_egm_no')->nullable();
            $table->string('igm_egm_index')->nullable();
            $table->integer('igm_egm_date')->nullable();
            $table->string('dry_port_igm_egm')->nullable();
            $table->string('dry_port_igm_egm_index')->nullable();
            $table->integer('dry_port_igm_egm_date')->nullable();
            $table->text('declarant')->nullable();
           $table->string('telephone')->nullable();
			$table->integer('challan_id')->unsigned()->index();
            $table->foreign('challan_id')->references('id')->on('challans')->onDelete('cascade');            
            $table->string('job_no')->nullable();
            $table->string('NTN')->nullable();
            $table->string('STRno_passport_n_date')->nullable();
            $table->string('warehouse_lic_no')->nullable();
			$table->string('transaction_type')->nullable();
            $table->string('lc_dd_no_date')->nullable();
            $table->string('country_destination')->nullable();
            $table->string('curr_name_code')->nullable();
            $table->string('vessel_mode_of_transport')->nullable();
            $table->text('bl_awl_con_no_date')->nullable();
            $table->float('exchangerate')->nullable();
            $table->string('portofshipment')->nullable();
            $table->string('paymentterms')->nullable();
            $table->string('portofdischarge')->nullable();
            $table->string('placeofdelivery')->nullable();
            $table->string('deliveryterms')->nullable();
            $table->string('marks_container_no')->nullable();
			$table->smallInteger('no_of_package')->nullable();
            $table->string('package_type')->nullable();
            $table->string('groswt')->nullable();
            $table->string('netwt')->nullable();
            $table->string('volume')->nullable();
            $table->string('itemno')->nullable();
            $table->string('quantity_unit')->nullable();
            $table->float('no_of_unit')->nullable();
            $table->string('CO_code')->nullable();
            $table->string('sro_no')->nullable();
            $table->string('hscode')->nullable();
            $table->text('items_desc')->nullable();
            $table->string('levy')->nullable();
            $table->string('rate')->nullable();
            $table->string('sumpayable_pkr')->nullable();
            $table->string('unitvalue_declared')->nullable();
            $table->string('unitvalue_assessed')->nullable();
            $table->string('totalvalue_declared')->nullable();
            $table->string('totalvalue_assessed')->nullable();
            $table->string('customvalue_declared_pkr')->nullable();
            $table->string('customvalue_assessed_pkr')->nullable();
            $table->text('sro_test_report_no_date')->nullable();
            $table->string('fobvalue')->nullable();
            $table->string('freight')->nullable();
            $table->string('cfrvalue')->nullable();
            $table->string('insurance')->nullable();
            $table->string('landingcharges_on_1perc')->nullable();
            $table->string('othercharges')->nullable();
            $table->string('assessedval_pkr')->nullable();
            $table->string('total_claim_pkr')->nullable();
            $table->text('machineno_date')->nullable();
            $table->text('rev_recover')->nullable();
            $table->float('rev_recover_total')->nullable();
            $table->string('amount')->nullable();
            $table->float('totalamount')->nullable();
            $table->string('cfo_no_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('good_declarations', function (Blueprint $table) {
            //
        });
    }
}
