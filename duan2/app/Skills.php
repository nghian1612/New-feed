<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = 'skills';

    public function user(){
        return $this -> belongsTo('App/Users','id_user','id');
    }
}
