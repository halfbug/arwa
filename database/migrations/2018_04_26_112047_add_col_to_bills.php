<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColToBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->string('client')->nullable();
            $table->string('challan')->nullable();
            $table->string('gd')->nullable();
            $table->string('total_bill_amount')->nullable()->change();
            $table->string('bill_no')->nullable()->change();
           $table->integer('date')->nullable()->change();
			$table->integer('challan_id')->nullable()->unsigned()->change();
			$table->integer('gd_id')->nullable()->unsigned()->change();
			$table->integer('client_id')->nullable()->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bills', function (Blueprint $table) {
		$table->dropColumn('client');
		$table->dropColumn('challan');
		$table->dropColumn('gd');
        });
    }
}
