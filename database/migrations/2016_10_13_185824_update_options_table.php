<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('options')->insert([
            'key' => 'gender',
            'value' => '[ "male", "female", "other" ]'
        ]);

        DB::table('value_sets')->insert([
            'key' => 'gender',
            'resource' => 'Options',
            'connection' => 'auth',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
