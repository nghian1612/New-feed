<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Middlefollows extends Model
{
    protected $table = 'middlefollows';

    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }

    public function follow(){
        return $this -> hasMany('App/Follows','id_mid','id');
    }
}
