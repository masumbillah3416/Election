<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

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
    public function campus(){
        return $this->belongsTo('App\campus','campus_id','id');
    }

    public function isAdmin(){
       if(Auth::user()->role_id==2){
           return 1;
       }
       return 0;

    }
    public function isCommissioner(){
        if(Auth::user()->role_id==3){
            return 1;
        }
        return 0;  
    }
    public function isVoter(){
        if(Auth::user()->role_id==1 && Auth::user()->status==1 ){
            return 1;
        }
        return 0;
    }
    public function isNotVoter(){
        if(Auth::user()->role_id==1 && Auth::user()->status==0 ){
            return 1;
        }
        return 0;
    }
}
