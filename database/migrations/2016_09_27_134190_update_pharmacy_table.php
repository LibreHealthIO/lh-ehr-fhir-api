<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePharmacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pharmacy', function ($table) {
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
        Schema::table('pharmacy', function ($table) {
            $table->dropColumn('emr_id');
            $table->dropColumn('connection');
        });
    }
}
