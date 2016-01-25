<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shape extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_diamond_options_shapes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image', 'percentage', 'position'];

}