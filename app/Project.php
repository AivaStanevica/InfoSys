<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [''];

    public function transactions(){
        return $this->hasMany('App\Transaction');
    }

    public function uploads(){
        return $this->hasMany('App\Transaction');
    }
}
