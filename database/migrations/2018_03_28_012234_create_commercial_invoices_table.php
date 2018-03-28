<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_invoices', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');            
            $table->text('invoice_to')->nullable();
            $table->string('invoice_no');
            $table->integer('invoice_date');
            $table->string('S/C_NC')->nullable();
            $table->integer('S/C_NC_date')->nullable();
            $table->string('B/L_no')->nullable();
            $table->string('container_no')->nullable();
            $table->string('HScode')->nullable();
            $table->string('countryoforigin')->nullable();
            $table->text('goods_description')->nullable();
            $table->string('goods_qty')->nullable();
            $table->string('goods_unit_price')->nullable();
            $table->float('amount')->nullable();
            $table->text('amount_in_words')->nullable();
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
        Schema::dropIfExists('commercial_invoices');
    }
}
