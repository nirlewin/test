<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model  {

    public static function yesOrNo($value) {
        return $value == 1 ? "Yes" : "No";
    }
}