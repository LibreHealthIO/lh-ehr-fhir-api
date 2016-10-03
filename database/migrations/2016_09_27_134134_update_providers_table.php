<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('provider', function ($table) {
            $table->string('emr_id')->default('new');
            $table->string('connection')->default('mysql');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('provider', function ($table) {
            $table->dropColumn('emr_id');
            $table->dropColumn('connection');
        });
    }
}
