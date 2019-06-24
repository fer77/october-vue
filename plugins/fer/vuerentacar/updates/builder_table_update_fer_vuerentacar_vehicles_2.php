<?php namespace Fer\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFerVuerentacarVehicles2 extends Migration
{
    public function up()
    {
        Schema::table('fer_vuerentacar_vehicles', function($table)
        {
            $table->boolean('available');
        });
    }
    
    public function down()
    {
        Schema::table('fer_vuerentacar_vehicles', function($table)
        {
            $table->dropColumn('available');
        });
    }
}
