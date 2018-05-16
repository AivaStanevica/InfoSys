<?php

namespace App\Http\Controllers;

use App\Finance;
use App\User;
use App\Project;
use App\Transaction;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function show($id=null){
        if($id){
            $transactions = Transaction::where('project_id', $id)->latest()->get();
        }
        else{
            $transactions = Transaction::latest()->get();
        }
        $finances = Finance::all();
        $projects = Project::all();
        $users= User::all();

        return view('finance.show', compact('finances','transactions','projects', 'users'));

    }
    public function store(Request $request){

        $this->validate($request, [
            'projectName' => 'required',
        ]);

        Project::create([
            'name' => request('projectName'),
            'description' => request('projectDescription'),
            'project_money'=>request('projectSum'),
            'responsible_id'=>request('responsible')
        ]);

        return redirect()->back();
    }
}
