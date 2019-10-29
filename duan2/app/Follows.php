<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follows extends Model
{
    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }

    public function middlefollow(){
        return $this -> belongsTo('App/Middlefollows','id_mid','id');
    }
}
