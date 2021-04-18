<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dapan extends Model
{
    public $primaryKey = 'idda';
    protected $table = 'dapan';
    public $timestamp = false;
    public function cauhoi()
    {
        return $this->hasMany('App\cauhoi','idda','idda');
    }
    // public function tracnghiem()
    // {
    //     return $this->hasManyThrough('App\tracnghiem', 'App\cauhoi','idtn','idda','idda');
    // }
}
