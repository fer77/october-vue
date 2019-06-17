<?php

use Fer\Vuerentacar\Models\Vehicle;

Route::get('vehicles', function () {
    $vehicles = Vehicle::all();
    return $vehicles;
});