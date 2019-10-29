<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }

    public function feed(){
        return $this -> belongsTo('App/Feeds','id_feed','id');
    }
}
