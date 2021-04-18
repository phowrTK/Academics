<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tracnghiem extends Model
{
    protected $table = 'tracnghiem';
    public $primaryKey = 'idtn';

    public function cauhoi()
    {
        return $this->hasMany('App\cauhoi','idtn','idtn');
    }
    public function course()
    {
        return $this->belongsTo('App\course','idkh','idkh');
    }
}
