<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class election extends Model
{
    //

    public function candidates(){
        return $this->hasMany('App\candidate');
    }
}
