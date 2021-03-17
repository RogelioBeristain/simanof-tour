<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_identities', function (Blueprint $table) {
            //

             $table->string('url_carta')->nullable();
              $table->string('url_audition')->nullable();
               $table->string('school_orquest')->nullable();
               $table->string('master_musical')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_identities', function (Blueprint $table) {
             $table->dropColumn('url_carta');
              $table->dropColumn('url_audition');
               $table->dropColumn('school_orquest');
                $table->dropColumn('master_musical');
        });
    }
}
