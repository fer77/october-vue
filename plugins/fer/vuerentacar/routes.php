<?php

use Fer\Vuerentacar\Models\Vehicle;
use Fer\Vuerentacar\Models\Location;

Route::get('vehicles', function () {
    $vehicles = Vehicle::with('locations')->get();
    return $vehicles;
});

Route::get('vehicles/filter/{id}', function ($id) {
    // return list of vehicles from API
    $vehicles = Vehicle::whereHas('locations', function ($query) use ($id) {
        $query->where('id', '=', $id);
    })->get();
    return $vehicles;
});

Route::get('locations', function () {
    $locations = Location::all();
    return $locations;
});

Route::get('locations/list', function () {
    $locations = Location::all();
    foreach ($locations as $location) {
        $location['label'] = $location['title'];
        $location['value'] = $location['id'];
        unset($location['id']);
        unset($location['slug']);
        unset($location['title']);
    }
    return $locations;
});
