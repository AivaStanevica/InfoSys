<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{

    public function showList(User $user){

        return \Auth::user()->id == $user->id;

    }

}
