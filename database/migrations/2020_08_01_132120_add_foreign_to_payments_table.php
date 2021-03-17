<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('simanof_payments', function (Blueprint $table) {
          
             $table->foreign('type_payment_id')->references('id')->on('type_payments')

        ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('simanof_payments', function (Blueprint $table) {
              $table->dropForeign(['type_payment_id']);
             
        });
    }
}
