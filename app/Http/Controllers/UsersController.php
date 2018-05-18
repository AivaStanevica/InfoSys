<?php

namespace App\Http\Controllers;

use Gate;

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
    public function showPending(){
        $users = User::all();

        return view('user.list.pending',compact('users'));
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

        return redirect()->back();
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

        $this->validate($request, [
            'userName' => 'required',
            'userSurname' => 'required',
            'email'=>'required|email',
            'phoneNr'=>'required',
            'studentId'=>'required',
            'email2'=>'required|email',
            'newPassword'=>'same:newPasswordComformation',
            'newPasswordComformation'
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

        if(!empty($request->input('newPassword','newPasswordComformation')))
        {
            $user->update([
//                'password' => Hash::make(request('newPassword'))
                'password' => request('newPassword')
            ]);
        }
        $user->save();


        return redirect()->back();
    }

    public function destroy(Request $request){

        $id=$request->input('id');

        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Information has been  deleted');
    }

    public function active(Request $request){

        $id=$request->input('id');
        $user = User::find($id);
        if($request->input('active')==0){
            $user->update(['active'=>'1']);
        }
        if($request->input('active')==1){
            $user->update(['active'=>'0']);
        }
        $user->save();

        return redirect()->back();
    }
}
