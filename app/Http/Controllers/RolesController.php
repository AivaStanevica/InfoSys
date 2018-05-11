<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Permission;

class RolesController extends Controller
{
    public function index(){;
        $roles = Role::all();

        return view('user.role.roles',compact('roles'));
    }
/*
* PAGAIDU VARIANTS - VAJAG LABĀK!!!!!!!!!!!!!!!
*/
    public function userRole(){
        $users = User::all();
        $roles = Role::all();

        return view('user.role.list',compact('users','roles'));
    }

    public function create(){
        $perms= Permission::all();
        return view('user.role.create', compact('perms'));
    }
    public function store(Request $request){

        $this->validate($request, [
            'roleName' => 'required',
        ]);

        User::create([
            'name' => request('roleName'),
            'description'=>request('description'),
        ]);

        return view('user.role.roles');
    }
}
