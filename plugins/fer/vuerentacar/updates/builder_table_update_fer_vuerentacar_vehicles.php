<?php namespace Fer\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFerVuerentacarVehicles extends Migration
{
    public function up()
    {
        Schema::table('fer_vuerentacar_vehicles', function($table)
        {
            $table->integer('price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fer_vuerentacar_vehicles', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
