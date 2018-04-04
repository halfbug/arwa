<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');            
			$table->text('received_from')->nullable();
            $table->integer('printed_on')->nullable();
            $table->string('receipt_no');
           $table->integer('date');
             $table->text('amount_in_words')->nullable();
           $table->string('payorder_no')->nullable();
            $table->integer('payorder_amount')->nullable();
             $table->string('drawn_on')->nullable();
           $table->integer('total_amount');
			$table->text('on_account_of')->nullable();
            $table->string('bl_no')->nullable();
            $table->string('index_no')->nullable();
            $table->string('vessel_no')->nullable();
 			$table->text('remarks')->nullable();
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
        Schema::dropIfExists('receipts');
    }
}

