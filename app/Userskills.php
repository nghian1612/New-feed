<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userskills extends Model
{
    protected $table = 'Userskills';
    public function skill(){
        return $this -> belongsTo('App\Skills','id_skill','id');
    }
    public function user(){
        return $this -> belongsTo('App\Users','id_user','id');
    }
}
