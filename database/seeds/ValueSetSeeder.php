<?php

use Illuminate\Database\Seeder;

class ValueSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('value_sets')->insert([
            'key' => str_random(10),
            'resource' => 'Provider',
            'connection' => 'auth',
        ]);

        DB::table('value_sets')->insert([
            'key' => str_random(10),
            'resource' => 'Pharmacy',
            'connection' => 'auth',
        ]);
    }
}
