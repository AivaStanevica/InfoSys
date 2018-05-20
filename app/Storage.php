<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $guarded = [''];

    public function inventory(){
        return $this->hasMany('App\Inventory','inventory_id');
    }
}
