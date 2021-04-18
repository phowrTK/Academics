<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comment';
    public $primaryKey = 'idcomment';

    public function course()
    {
        return $this->belongsTo('App\course','idkh','idkh');
    }
    public function User()
    {
        return $this->belongsTo('App\User','id','id');
    }
}
