<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_contacts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departmentId', 'userId', 'text', 'position','createTime'];

    public function department()
    {
        return $this->belongsTo('App\Contactsdepartment','departmentId');
    }
    public function user()
    {
        return $this->belongsTo('App\Usersnew','userId');
    }

}