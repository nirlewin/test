<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Polish extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_diamond_options_polishs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'percentage', 'position'];

}