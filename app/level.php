<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    public $primaryKey = 'idlevel';
    protected $table = 'level';
    public $timestamp = false;
    public function category()
    {
        return $this->belongsTo('App\category','idcategory','idcategory');
    }
    public function course()
    {
        return $this->hasMany('App\course','idlevel','idlevel');
    }
}
