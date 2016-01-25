<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_ads';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image', 'price', 'buttonText', 'buttonUrl', 'showLabel', 'position'];

    public static $boolean = ['showLabel'];

}