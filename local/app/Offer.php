<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_offers';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['buyerId', 'sellerId', 'diamondId', 'rapBelow', 'userPrice', 'status','createTime'];

    public function buyer()
    {
        return $this->belongsTo('App\Usersnew','buyerId');
    }
    public function seller()
    {
        return $this->belongsTo('App\Usersnew','sellerId');
    }
    public function statusName() {
        switch($this->status) {
            case 0: return "New";
            case 1: return "Approved";
            case 2: return "Declined";
        }
    }
}