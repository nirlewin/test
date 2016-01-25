<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usersnew extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_users';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serialNumber', 'fullName', 'companyName', 'email', 'address', 'countryId', 'phone', 'image', 'agree', 'haveAds', 'notifyForNewDiamonds','createTime'];

    public static $boolean = ['agree', 'haveAds', 'notifyForNewDiamonds'];

    public function country()
    {
        return $this->belongsTo('App\Country','countryId');
    }
}