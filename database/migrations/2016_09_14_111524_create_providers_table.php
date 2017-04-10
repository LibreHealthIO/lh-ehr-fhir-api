<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    protected $connection = 'auth';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->create('provider', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('practice_name');
            $table->string('address');
            $table->string('town');
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->drop('provider');
    }
}
