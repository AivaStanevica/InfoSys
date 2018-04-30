<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the users for the roles.
     */
    public function users(){
        return $this->hasMany('App\User');
    }
}
