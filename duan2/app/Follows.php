<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
    protected $table = 'follows';
    public function user(){
        return $this -> belongsTo('App\User','id_user','id');
    }
    public function mduser(){
        return $this -> belongsTo('App\User','id_mid','id');
    }
}
