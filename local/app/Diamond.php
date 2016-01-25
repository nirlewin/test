<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Diamond extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'd2c_diamonds';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userId', 'sku', 'carat', 'shapeId', 'colorId', 'reportId', 'reportCode', 'reportImage', 'clarityId', 'cutId', 'fluorescenceId', 'symmetryId', 'polishId', 'countryId', 'image', 'listPrice', 'rapBelow', 'totalPrice', 'shareImage', 'video360', 'video360_mp4', 'sold', 'deleted', 'published', 'position','createTime','lastUpdateTime'];

    public static $boolean = ['sold', 'deleted', 'published'];

    public function user()
    {
        return $this->belongsTo('App\Usersnew','userId');
    }

    public function country()
    {
        return $this->belongsTo('App\Country','countryId');
    }
    public function shape()
    {
        return $this->belongsTo('App\Shape','shapeId');
    }
    public function color()
    {
        return $this->belongsTo('App\Color','colorId');
    }
    public function report()
    {
        return $this->belongsTo('App\Report','reportId');
    }
    public function clarity()
    {
        return $this->belongsTo('App\Clarity','clarityId');
    }
    public function cut()
    {
        return $this->belongsTo('App\Cut','cutId');
    }
    public function fluorescence()
    {
        return $this->belongsTo('App\Fluorescence','fluorescenceId');
    }
    public function symmetry()
    {
        return $this->belongsTo('App\Symmetry','symmetryId');
    }
    public function polish()
    {
        return $this->belongsTo('App\Polish','polishId');
    }
}