<?php namespace Fer\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /* Relations */
    public $belongsToMany = [
        'locations' => [
            'Fer\Vuerentacar\Models\Location', // model
            'table' => 'fer_vuerentacar_vehicles_locations', // pivot table
            'order' => 'title'
        ]
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
    ];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fer_vuerentacar_vehicles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
