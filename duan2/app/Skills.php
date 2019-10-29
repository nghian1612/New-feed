<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = 'skills';

    public function userskill(){
        return $this -> belongsTo('App/Userskills','id_skill','id');
    }
    public function feedskill(){
        return $this -> hasMany('App/Feedskills','id_skill','id');
    }
}
