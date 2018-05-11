<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The permissions that belong to the user roles.
     */

    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
