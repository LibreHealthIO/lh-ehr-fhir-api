<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique();
            $table->string('value');
            $table->timestamps();
        });

        DB::table('options')->insert([
            'key' => 'relationships',
            'value' => '[ "spouse", "sibling", "child" ]'
        ]);

        DB::table('value_sets')->insert([
            'key' => 'relationships',
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
        Schema::dropIfExists('options');
    }
}
