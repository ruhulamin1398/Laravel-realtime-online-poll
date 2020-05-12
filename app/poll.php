<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poll extends Model
{
    //
    public function options(){
        return $this->hasMany('App\pollOption');
    }
}
