<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedskills extends Model
{
    protected $table = 'feedskills';

    public function skill(){
        return $this -> belongsTo('App/Skills','id_skill','id');
    }
    public function feed(){
        return $this -> belongsTo('App/feeds','id_feed','id');
    }
}
