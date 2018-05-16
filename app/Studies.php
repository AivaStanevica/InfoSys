<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studies extends Model
{
    protected $fillable = ['study_program'];

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
