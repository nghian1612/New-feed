<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Externallinks extends Model
{
    protected $table = 'externallinks';

    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }
}
