<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lend extends Model
{
    protected $guarded = [''];

    public $table = "lend";

    public function inventory(){
        return $this->belongsTo('App\Inventory');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
