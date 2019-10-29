<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    protected $table = 'educations';

    public function user(){
        return $this -> belongsTo('App/Educations','id_user','id');
    }
}
