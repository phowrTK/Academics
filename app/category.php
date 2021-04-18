<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    public $primaryKey = 'idcategory';

    public function level()
    {
        return $this->hasMany('App\level','idcategory','idcategory');
    }
    public function course()
    {
        return $this->hasManyThrough('App\course', 'App\level','idcategory','idlevel','idcategory');
        //return $this->hasMany('App\course','idcategory','idcategory');

    }
}
