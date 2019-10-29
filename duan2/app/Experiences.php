<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $table = 'experiences';

    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }
}
