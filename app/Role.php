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

    public function hasAnyPermission($permissions){
        if(is_array($permissions)){
            foreach ($permissions as $permission){
                if($this->hasPermission($permission)){
                    return true;
                }
            }
        } else{
            if($this->hasPermission($permissions)){
                return true;
            }
        }
        return false;
    }

    public function hasPermission($permission){
        if($this->permissions()->where('name', $permission)->first()){
            return true;
        }
        return false;
    }


    /**
     * The roles that belong to the premission.
     */

    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }
}
