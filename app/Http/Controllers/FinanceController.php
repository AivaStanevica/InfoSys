<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Finance;
use App\Project;
use App\User;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(){
        $finances = Finance::all();
        $transactions = Transaction::latest()->get();
        $projects = Project::all();
        $users= User::all();

        return view('finance.show', compact('finances','transactions','projects', 'users'));
    }
    public function store(Request $request){

        $this->validate($request, [
            'financeName' => 'required',
        ]);

        Finance::create([
            'name' => request('financeName'),
            'description' => request('financeDescription'),
        ]);

        return redirect()->back();
    }
}
