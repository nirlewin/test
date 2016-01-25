<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_diamond_options_colors';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'percentage', 'position'];

    public function typeName() {
        switch($this->type) {
            case 1: return "White";
            case 2: return "Fancy";
            default: return "N/A";
        }
    }

}