<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->create('pharmacy', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('pharmacy_name');
            $table->string('address');
            $table->string('town');
            $table->string('state');
            $table->string('country');
            $table->string('status');
        });



        DB::connection($this->connection)->table('pharmacy')
            ->insert(
                [
                    'id'               => 1,
                    'pharmacy_name'             => 'realty-and-mortgage',
                    'address'          => '3928 E. Beverly Rd',
                    'town'             => 'Chandler',
                    'state'            => 'AZ',
                    'country'          => 'US',
                    'status' => 'notregistered',
                ]
            );

        DB::connection($this->connection)->table('pharmacy')
            ->insert(
                [
                    'id'               => 2,
                    'pharmacy_name'             => '3d-hypnosis-center',
                    'address'          => '545 W Mariposa St',
                    'town'             => 'Mesa',
                    'state'            => 'NJ',
                    'country'          => 'US',
                    'status' => 'registered',

                ]
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->drop('pharmacy');
    }
}
