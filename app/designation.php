<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class designation extends Model
{
    public function candidates(){
        return $this->hasMany('App\candidate');
    }
}
