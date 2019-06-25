<?php namespace Fer\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFerVuerentacarVehiclesDates extends Migration
{
    public function up()
    {
        Schema::create('fer_vuerentacar_vehicles_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vehicle_id');
            $table->integer('date_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fer_vuerentacar_vehicles_dates');
    }
}
