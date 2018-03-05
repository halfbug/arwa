<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("shipper")->unsigned()->index();
            $table->foreign("shipper")->references('id')->on('clients')->onDelete('cascade')->change();
            $table->integer("consignee")->unsigned()->index();
            $table->foreign("consignee")->references('id')->on('clients')->onDelete('cascade')->change();
            $table->integer("notify_party")->unsigned()->index();
            $table->foreign("notify_party")->references('id')->on('clients')->onDelete('cascade')->change();
                $table->string('voyage_no')->nullable();
            $table->string('loading_at')->nullable();
            $table->string('discharge_at')->nullable();
            $table->string('delivery_at')->nullable();
            $table->string('marks_number')->nullable();
//            $table->text('marks_number');
            $table->text('goods_description')->nullable();
                $table->text('gross_weight')->nullable();
            $table->text('measurement')->nullable();
            $table->string('containers_no')->nullable();
                $table->string('movement')->nullable();
                $table->string('freight')->nullable();
            $table->string('original_no')->nullable();
            $table->string('remarks')->nullable();
            $table->float('amount')->nullable();
            $table->integer('date');

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
        Schema::dropIfExists('orders');
    }
}
