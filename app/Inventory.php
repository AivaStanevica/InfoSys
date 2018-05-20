<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $guarded = [''];

    public $table = "inventory";

    public function storage(){
        return $this->belongsTo('App\Storage','storage_id','id');
    }

    public function additional(){
        return $this->hasMany('App\Additional','additional_id','id');
    }

    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function lend(){
        return $this->belongsTo('App\Lend');
    }

}
