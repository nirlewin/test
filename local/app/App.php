<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fo_apps';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'bundle_id', 'apple_id', 'store_link'];

    public function workouts()
    {
        return $this->hasMany('App\Workout');
    }
}