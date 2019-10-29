<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeds extends Model
{
    protected $table = 'feeds';

    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }

    public function comment(){
        return $this -> hasMany('App/Comments','id_feed','id');
    }

    public function like(){
        return $this -> hasMany('App/Likes','id_feed','id');
    }
}
