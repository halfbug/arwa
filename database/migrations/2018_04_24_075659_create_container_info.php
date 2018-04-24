<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainerInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_of_containers', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('order_id')->unsigned()->index();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');            
            $table->text('freight_charges')->nullable();
            $table->text('rev_terms')->nullable();
            $table->text('rate')->nullable();
            $table->text('per')->nullable();
            $table->text('amount')->nullable();
            $table->text('prepaid')->nullable();
            $table->text('collect')->nullable();
            $table->text('f_c_payable_by')->nullable();
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
        Schema::dropIfExists('info_of_containers');
    }
}
