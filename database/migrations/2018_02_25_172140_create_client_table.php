<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('ntn')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('mobile')->nullable();
            $table->text('shipping_address')->nullable();
            $table->text('billing_address')->nullable();
            $table->string('country')->nullable();
            $table->string('city_state')->nullable();
                $table->string('company_name');
            $table->string('company_phone')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_fax')->nullable();
            $table->string('company_address')->nullable();

            $table->text('special_note')->nullable();
            $table->string('company_docs')->nullable();
            $table->enum('type', ['Customer', 'Vendor']);
            $table->boolean('status')->defaule(true);
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
        Schema::dropIfExists('client');
    }
}
