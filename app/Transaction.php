<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [''];

    public function finance(){
        return $this->belongsTo('App\Finance','finance_id','id');
    }

    public function project(){
        return $this->belongsTo('App\Project','project_id','id');
    }
}
