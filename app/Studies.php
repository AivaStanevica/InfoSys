<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studies extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
