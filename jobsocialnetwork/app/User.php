<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


class Users extends Model
{
    protected $table = 'users';

    public function externallink(){
        return $this -> hasMany('App/Externallinks','id_user','id');
    }

    public function experience(){
        return $this -> hasMany('App/Experiences','id_user','id');
    }

    public function skill(){
        return $this -> hasMany('App/Skills','id_user','id');
    }

    public function education(){
        return $this -> hasMany('App/Educations','id_user','id');
    }

    public function middlefollow(){
        return $this -> hasMany('App/Middlefollows','id_user','id');
    }

   
    public function follow(){
        return $this -> belongsTo('App/Follows','id_user','id');
    }


    public function feed(){
        return $this -> hasMany('App/Feeds','id_user','id');
    }

    public function comment(){
        return $this -> belongsTo('App/Comments','id_user','id');
    }

    public function like(){
        return $this -> belongsTo('App/Likes','id_user','id');
    }

}