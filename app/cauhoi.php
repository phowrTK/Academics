<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cauhoi extends Model
{
    public $primaryKey = 'idch';
    protected $table = 'cauhoi';

    public function dapan()
    {
        return $this->belongsTo('App\dapan','idda','idda');
    }
    public function tracnghiem()
    {
        return $this->belongsTo('App\tracnghiem','idtn','idtn');
    }
}
