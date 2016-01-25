<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_countries';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image', 'position'];

}