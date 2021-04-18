<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';
    public $primaryKey = 'idkh';



    public function level()
    {
        return $this->belongsTo('App\level','idlevel','idlevel');
    }
    public function comment()
    {
        return $this->hasMany('App\comment','idkh','idkh');
    }
    public function tracnghiem()
    {
        return $this->hasMany('App\tracnghiem','idkh','idkh');
    }
    public function User()
    {
        return $this->belongsTo('App\User','id','id');
    }
}
