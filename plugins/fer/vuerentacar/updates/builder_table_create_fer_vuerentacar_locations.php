<?php namespace Fer\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFerVuerentacarLocations extends Migration
{
    public function up()
    {
        Schema::create('fer_vuerentacar_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fer_vuerentacar_locations');
    }
}
