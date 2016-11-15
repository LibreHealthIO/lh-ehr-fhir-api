<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*

        CREATE TABLE `list_options` (
          `list_id` varchar(31) NOT NULL DEFAULT '',
          `option_id` varchar(31) NOT NULL DEFAULT '',
          `title` varchar(255) NOT NULL DEFAULT '',
          `seq` int(11) NOT NULL DEFAULT '0',
          `is_default` tinyint(1) NOT NULL DEFAULT '0',
          `option_value` float NOT NULL DEFAULT '0',
          `mapping` varchar(31) NOT NULL DEFAULT '',
          `notes` varchar(255) NOT NULL DEFAULT '',
          `codes` varchar(255) NOT NULL DEFAULT '',
          `toggle_setting_1` tinyint(1) NOT NULL DEFAULT '0',
          `toggle_setting_2` tinyint(1) NOT NULL DEFAULT '0',
          `activity` tinyint(4) NOT NULL DEFAULT '1',
          `subtype` varchar(31) NOT NULL DEFAULT ''
        )

         * */

        Schema::create('list_options', function (Blueprint $table) {
            $table->string('list_id');
            $table->string('option_id');
            $table->string('title');
            $table->integer('seq');
            $table->integer('is_default');
            $table->float('option_value');
            $table->string('mapping');
            $table->string('notes');
            $table->string('codes');
            $table->integer('toggle_setting_1');
            $table->integer('toggle_setting_2');
            $table->integer('activity');
            $table->string('subtype');
        });

        DB::statement(
            DB::raw( "INSERT INTO list_options (list_id,option_id,title,seq,is_default)
            VALUES  
            (\"county\",\"Cork\",\"Cork\",0,0),
            (\"county\",\"Galway\",\"Galway\",0,0),
            (\"county\",\"Mayo\",\"Mayo\",0,0),
            (\"county\",\"Donegal\",\"Donegal\",0,0),
            (\"county\",\"Kerry\",\"Kerry\",0,0),
            (\"county\",\"Tipperary\",\"Tipperary\",0,0),
            (\"county\",\"Clare\",\"Clare\",0,0),
            (\"county\",\"Tyrone\",\"Tyrone\",0,0),
            (\"county\",\"Antrim\",\"Antrim\",0,0),
            (\"county\",\"Limerick\",\"Limerick\",0,0),
            (\"county\",\"Roscommon\",\"Roscommon\",0,0),
            (\"county\",\"Down\",\"Down\",0,0),
            (\"county\",\"Wexford\",\"Wexford\",0,0),
            (\"county\",\"Meath\",\"Meath\",0,0),
            (\"county\",\"Londonderry\",\"Londonderry\",0,0),
            (\"county\",\"Kilkenny\",\"Kilkenny\",0,0),
            (\"county\",\"Wicklow\",\"Wicklow\",0,0),
            (\"county\",\"Offaly\",\"Offaly\",0,0),
            (\"county\",\"Cavan\",\"Cavan\",0,0),
            (\"county\",\"Waterford\",\"Waterford\",0,0),
            (\"county\",\"Westmeath\",\"Westmeath\",0,0),
            (\"county\",\"Sligo\",\"Sligo\",0,0),
            (\"county\",\"Laois\",\"Laois\",0,0),
            (\"county\",\"Kildare\",\"Kildare\",0,0),
            (\"county\",\"Fermanagh\",\"Fermanagh\",0,0),
            (\"county\",\"Leitrim\",\"Leitrim\",0,0),
            (\"county\",\"Armagh\",\"Armagh\",0,0),
            (\"county\",\"Monaghan\",\"Monaghan\",0,0),
            (\"county\",\"Longford\",\"Longford\",0,0),
            (\"county\",\"Dublin\",\"Dublin\",0,0),
            (\"county\",\"Carlow\",\"Carlow\",0,0),
            (\"county\",\"Louth\",\"Louth\",0,0);"
        ));


        DB::table('value_sets')->insert([
            'key' => 'county',
            'resource' => 'ListOptions',
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
        Schema::dropIfExists('list_options');
    }
}
