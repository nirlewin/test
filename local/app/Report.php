<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_diamond_options_reports';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'site', 'image', 'percentage', 'position'];

}