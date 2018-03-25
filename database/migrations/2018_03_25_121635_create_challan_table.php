<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('headofaccount');
            $table->string('challan_no');
            $table->string('B/E_GD_no');
            $table->string('B/E_cash_no');
			$table->integer('trader_id')->unsigned()->index();
            $table->foreign('trader_id')->references('id')->on('clients')->onDelete('cascade');            
            $table->text('clearing_agent');
            $table->smallInteger('no_of_container');
            $table->integer('assessed_value');
			$table->enum('assessed_value_currency', ['PKR','USD','EUR']);
            $table->float('gross_weight');
            $table->float('net_weight');
            $table->float('cass_amount_percentage');
            $table->float('cass_amount');
			$table->enum('cass_amount_currency', ['PKR','USD','EUR']);
            $table->smallInteger('amount_charged_on_distance');
            $table->integer('stamp_duty_on_BE');
			$table->enum('stamp_duty_currency', ['PKR','USD','EUR']);
			$table->integer('total_amount');
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
        Schema::dropIfExists('challans');
    }
}
