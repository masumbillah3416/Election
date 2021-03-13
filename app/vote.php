<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    public function user(){
        return  $this->belongsTo("App\User","user_id","id");
    }
    public function candidate(){
        return  $this->belongsTo("App\candidate","candidate_id","id");
    }
    //
}
