<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Studies;
use App\Direction;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        $roles = Role::all();

        return view('user.list.list',compact('users','roles'));
    }
/*
* PAGAIDU VARIANTS - VAJAG LABĀK!!!!!!!!!!!!!!!
*/
    public function index2(){
        $users = User::all();
        $roles = Role::all();

        return view('user.list.expand',compact('users','roles'));

    }

    public function show($id){
        $user = User::find($id);
        $roles = Role::all();
        $studies = Studies::all();
        $directions = Direction::all();

        return view('user.profile.edit',compact('user','roles','studies','directions'));
    }

    public function create(){
        return view('user.profile.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'userName' => 'required',
            'userSurname' => 'required',
            'email'=>'required|email',
            'phoneNr'=>'required',
            'studentId'=>'required',
            'email2'=>'required|email',
            'newPassword'=>'required|same:newPasswordComformation',
            'newPasswordComformation'=>'required'
        ]);

        User::create([
            'name' => request('userName'),
            'surname' => request('userSurname'),
            'email' => request('email'),
            'phone' =>request('phoneNr'),
            'student_id' => request('studentId'),
            'email2'=>request('email2'),
            'description'=>request('description'),
            'bank_account'=>request('bankAccount'),
            'address'=>request('address'),
            'person_code'=>request('personCode'),
            'password' => Hash::make(request('newPassword'))
        ]);

         return view('user.profile.create');
    }

    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        $studies = Studies::all();
        $directions = Direction::all();

        return view('user.profile.edit',compact('user','roles','directions','studies'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $roles = Role::all();
        $studies = Studies::all();
        $directions = Direction::all();

        $this->validate($request, [
            'userName' => 'required',
            'userSurname' => 'required',
            'email'=>'required|email',
            'phoneNr'=>'required',
            'studentId'=>'required',
            'email2'=>'required|email',
            'newPassword'=>'required|same:newPasswordComformation',
            'newPasswordComformation'=>'required'
        ]);

        $user->update([
            'name' => request('userName'),
            'surname' => request('userSurname'),
            'email' => request('email'),
            'phone' =>request('phoneNr'),
            'student_id' => request('studentId'),
            'direction' => request('direction'),
            'email2'=>request('email2'),
            'course'=>request('course'),
            'study_program' => request('studyProgram'),
            'description'=>request('description'),
            'bank_account'=>request('bankAccount'),
            'address'=>request('address'),
            'person_code'=>request('personCode'),
        ]);

        if(!empty($request->input('newPassword')))
        {
            $user->update([
//                'password' => Hash::make(request('newPassword'))
                'password' => request('newPassword')
            ]);
        }
        $user->save();


        return view('user.profile.edit',compact('user','roles','studies','directions'));
    }
}
