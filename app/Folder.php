<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $guarded = [''];

    public function uploads(){
        return $this->hasMany('App\Upload','upload_id');
    }
}
