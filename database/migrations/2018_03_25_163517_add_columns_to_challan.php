<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToChallan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('challans', function (Blueprint $table) {
			$table->enum('total_amount_currency', ['PKR','USD','EUR']);
			$table->integer('date');
			$table->integer('GD_date');
			$table->integer('payment_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('challans', function (Blueprint $table) {
		$table->dropColumn('total_amount_currency');
		$table->dropColumn('date');
		$table->dropColumn('GD_date');
		$table->dropColumn('payment_date');
		});
    }
}
