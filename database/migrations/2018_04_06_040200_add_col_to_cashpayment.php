<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColToCashpayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cash_payment_receipts', function (Blueprint $table) {
			$table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');            
            $table->string('cash_no');
           $table->integer('date');
           $table->string('gd_no')->nullable();
            $table->smallInteger('igm_no')->nullable();
            $table->string('blawb_no')->nullable();
            $table->string('index_no')->nullable();
            $table->string('vessel_name')->nullable();
            $table->string('agent_name');
           $table->string('package_type')->nullable();
			$table->smallInteger('no_of_package')->nullable();
			$table->integer('payee_id')->unsigned()->index();
            $table->foreign('payee_id')->references('id')->on('clients')->onDelete('cascade');            
			$table->text('paymentbreakup')->nullable();
            $table->integer('total_amount');
             $table->text('amount_in_words')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('psid_no')->nullable();
            $table->string('bank')->nullable();
            $table->string('city')->nullable();
            $table->string('branch')->nullable();
            $table->string('instrument_no')->nullable();
            $table->integer('Payment_amount')->nullable();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cash_payment_receipts', function (Blueprint $table) {
		$table->dropColumn('client_id');
		$table->dropColumn('cash_no');
		$table->dropColumn('date');
		$table->dropColumn('gd_no');
		$table->dropColumn('igm_no');
		$table->dropColumn('blawb_no');
		$table->dropColumn('index_no');
		$table->dropColumn('vessel_name');
		$table->dropColumn('agent_name');
		$table->dropColumn('package_type');
		$table->dropColumn('no_of_package');
		$table->dropColumn('payee_id');
		$table->dropColumn('paymentbreakup');
		$table->dropColumn('total_amount');
		$table->dropColumn('amount_in_words');
		$table->dropColumn('payment_mode');
		$table->dropColumn('psid_no');
		$table->dropColumn('bank');
		$table->dropColumn('city');
		$table->dropColumn('branch');
		$table->dropColumn('instrument_no');
		$table->dropColumn('Payment_amount');
        });
    }
}
