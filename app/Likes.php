<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $table = 'likes';

    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }

    public function feed(){
        return $this -> belongsTo('App/Feeds','id_feed','id');
    }
}
