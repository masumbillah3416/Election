<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    public function votes(){
        return $this->hasMany('App\vote','candidate_id','id');
    }
    
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function center(){
        return $this->belongsTo('App\election','election_id','id');
    }
    public function designation(){
        return $this->belongsTo('App\designation','designation_id','id');
    } 
   public function campus(){
        return $this->belongsTo('App\campus');
    }

}
