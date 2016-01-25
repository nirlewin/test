<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactsdepartment extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_contacts_departments';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'position'];

}