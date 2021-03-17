<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimanofPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simanof_payments', function (Blueprint $table) {
            $table->id();
             $table->double('total', 8, 2)->nullable();
            $table->double('total_tour', 8, 2)->nullable();
            $table->double('fee', 8, 2)->nullable();
            $table->string('currency_code')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('date_register',0)->nullable();
            $table->string('country_code')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('full_name')->nullable();
            $table->string('paypal_email')->nullable();
            $table->string('order_id')->nullable();
            $table->string('payer_id')->nullable();
            $table->string('capture_id')->nullable();
            $table->unsignedBigInteger('type_payment_id')->nullable();


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
        Schema::dropIfExists('simanof_payments');
    }
}
