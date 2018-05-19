<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $guarded = [''];

    public function folder(){
        return $this->belongsTo('App\Folder','folder_id');
    }
    public function project(){
        return $this->belongsTo('App\Project','project_id','id');
    }
}
