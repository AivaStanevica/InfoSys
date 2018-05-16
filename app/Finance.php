<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $guarded = [''];

    public function transactions(){
        return $this->hasMany('App\Transaction','transactions_id');
    }
}
