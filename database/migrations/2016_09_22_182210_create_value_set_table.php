<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValueSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('value_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique();
            $table->string('resource');
            $table->string('connection');
            $table->timestamps();
        });

        $value_sets = array(
            array('id' => '1','key' => 'KfaDm3UgmO','resource' => 'Provider','description' => '','connection' => 'auth','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','key' => 'wxw6yC2muL','resource' => 'Pharmacy','description' => '','connection' => 'auth','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','key' => 'personal_relationship','resource' => 'ListOptions','description' => '','connection' => 'auth','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','key' => 'sex','resource' => 'ListOptions','description' => '','connection' => 'auth','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','key' => 'county','resource' => 'ListOptions','description' => '','connection' => 'auth','created_at' => NULL,'updated_at' => NULL)
        );

        foreach ( $value_sets as $value_set ) {
            DB::table('value_sets')->insert( $value_set );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('value_sets');
    }
}
