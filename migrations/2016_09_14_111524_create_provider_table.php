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
            $table->string('country');
            $table->string('email')->unique();
        });



        DB::connection($this->connection)->table('provider')
            ->insert(
                [
                    'id'            => 1,
                    'firstname'     => 'John',
                    'lastname'      => 'Dow',
                    'email'         => 'example@example.com',
                    'practice_name'      => 'ophthalmologist',
                    'address'       => '1757 E. Baseline Rd',
                    'town'          => 'Gilbert',
                    'country'       => 'AZ',
                ]
            );

        DB::connection($this->connection)->table('provider')
            ->insert(
                [
                    'id'            => 2,
                    'firstname'     => 'Wolly',
                    'lastname'      => 'Morris',
                    'email'         => 'mirris@example.com',
                    'practice_name'      => 'otolaryngologist',
                    'address'       => '944 S. Mill Ave',
                    'town'          => 'Tempe',
                    'country'       => 'AZ',
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
        Schema::connection($this->connection)->drop('provider');
    }
}
