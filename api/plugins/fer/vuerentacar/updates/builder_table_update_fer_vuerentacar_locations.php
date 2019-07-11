<?php namespace Fer\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFerVuerentacarLocations extends Migration
{
    public function up()
    {
        Schema::table('fer_vuerentacar_locations', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('fer_vuerentacar_locations', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191)->change();
            $table->string('slug', 191)->change();
        });
    }
}
