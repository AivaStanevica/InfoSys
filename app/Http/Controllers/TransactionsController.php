<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;


use App\Finance;
use App\User;
use App\Project;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function show($id=null){

        if($id){
            $transactions = Transaction::where('finance_id', $id)->latest()->get();
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
            'sum' => 'required|integer',
            'name' => 'required',
        ]);

        Transaction::create([
            'sum' => request('sum'),
            'name' => request('name'),
            'description' => request('description'),
            'user_id' =>\Auth::user()->id,
            'finance_id' => request('source'),
            'project_id'=>request('project'),
            'file'=>request('file') //izdomāt, kā glabāt datubāzē šo nosaukumu
        ]);

        //saglaba failu ar tādu pašu vārdu kā lietotaja - nav labi, jo var nebūt ASCII
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/upload', $name);
        }
        return redirect()->back();

    }
    public function sum($finance){
        $sum=Transaction::where('finance_id',$finance)->sum('sum');

        return $sum;
    }

    public function download($transaction){

        return Storage::download(base_path()."/storage/app/public/upload/", $transaction);

    }
}
