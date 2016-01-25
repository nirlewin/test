<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_terms';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['text', 'having_trouble_url'];

}