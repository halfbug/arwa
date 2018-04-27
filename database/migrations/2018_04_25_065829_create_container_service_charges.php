<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainerServiceCharges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container_service_charges', function (Blueprint $table) {
            $table->increments('id');
			$table->string('vessel')->nullable();
			$table->string('voyage')->nullable();
			$table->integer('arr_date')->nullable();
			$table->string('bill_land_no')->nullable();
			$table->integer('index_no')->nullable();
			$table->integer('cf_agent')->unsigned()->index();
            $table->foreign('cf_agent')->references('id')->on('clients')->onDelete('cascade');            
			$table->string('container_no');
			$table->string('size')->nullable();
			$table->integer('gate_out')->nullable();
			$table->integer('gate_in')->nullable();
			$table->string('total_days')->nullable();
			$table->string('free_days')->nullable();
			$table->string('detention_days')->nullable();
			$table->float('total_usd',8,2)->nullable();
			$table->integer('total_rupees')->nullable();
			$table->float('total_detention_charges', 8, 2)->nullable();
			$table->float('transportation_charges', 8, 2)->nullable();
			$table->float('plugging_charges', 8, 2)->nullable();
			$table->float('container_cleaning_cost', 8, 2)->nullable();
			$table->float('container_repairing_cost', 8, 2)->nullable();
			$table->float('total_charges', 8, 2)->nullable();
			$table->float('container_deposit_recieved', 8, 2)->nullable();
			$table->float('balance_amt', 8, 2)->nullable();
			$table->float('exchangerate', 8, 2)->nullable();
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
        Schema::dropIfExists('container_service_charges');
    }
}
