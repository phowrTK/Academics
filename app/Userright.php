<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userright extends Model
{
    protected $table = 'userright';
    public $primaryKey = 'idur';
    public function User()
    {
        return $this->belongsTo('App\User','id','id');
    }
}
