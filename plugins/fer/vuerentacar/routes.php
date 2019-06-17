<?php

use Fer\Vuerentacar\Models\Vehicle;

Route::get('vehicles', function () {
    $vehicles = Vehicle::all();
    return $vehicles;
});

// Next -> E02: Vue Setup