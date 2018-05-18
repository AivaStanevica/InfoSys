<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [''];

    /**
     * Get the users for the roles.
     */
    public function users(){
        return $this->hasMany('App\User');
    }


    /**
     * The roles that belong to the premission.
     */

    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }

    public function givePermissionTo(Permission $permission){
        return $this->permissions()->save($permission);
    }
}
