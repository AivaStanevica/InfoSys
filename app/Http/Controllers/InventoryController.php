<?php

namespace App\Http\Controllers;

use App\Finance;
use App\Inventory;
use App\Storage;
use App\Type;
use App\User;
use App\Project;
use App\Additional;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InventoryController extends Controller
{
    public function show($id=null){

        if($id){
            $storages = Storage::where('storage_id', $id)->latest()->get();
        }
        else{
            $storages = Storage::latest()->get();
        }
        $inventory = Inventory::all();
        $projects = Project::all();
        $users= User::all();
        $type=Type::all();
        $finances=Finance::all();

        return view('inventory.show', compact('storages','inventory','projects', 'users','type','finances'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
        ]);
        $inventory = new Inventory;
        $inventory->name=$request->name;
        $inventory->units=$request->units;
        $inventory->type=$request->type;
        $inventory->storage_id=$request->storage;
        $inventory->description=$request->description;
        $inventory->project_id=$request->project;

        $inventory->save();

        $additonalInfo=[$request->add_units,$request->additional];

        if($additonalInfo!==null) {
            foreach ($additonalInfo as $info) {
                $additional= new Additional;
                $additional->inventory_id= $inventory->id;
                $additional->units = $info[0];
                $additional->name=$info[1];
                $additional->save();


            }
        }


//        Inventory::create([
//            'name' => request('name'),
//            'units'=>request('units'),
//            'type'=>request('type'),
//            'storage'=>request('storage'),
//            'description' => request('description'),
//            'project_id'=>request('project'),
//            'file'=>request('file') //izdomāt, kā glabāt datubāzē šo nosaukumu
//        ]);

        //saglaba failu ar tādu pašu vārdu kā lietotaja - nav labi, jo var nebūt ASCII
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/upload', $name);
        }

        return redirect()->back();

    }

    public function avaliable(Request $request){
        $id=$request->inventory;

        $inventory = Inventory::find($id);

        $inventory->update(['avaliable'=>$request->avaliable]);

        $inventory->save();

        return redirect()->back();

    }

    public function sold(Request $request){

        $units=$request->soldUnits;

        $price=$request->soldPrice;

        $sum=$price*$units;

        Transaction::create([
            'sum' => $sum,
            'name' => request('inventoryName'),
            'user_id' =>\Auth::user()->id,
            'finance_id' => request('soldFinance'),
        ]);

    }

    public function countUnits(Request $request){

        $units=2;

        $id=$request->inventory;

        $inventory = Inventory::find($id);

        $inventoryCount = ($inventory->units) - $units;

        $inventory->update(['units'=>$inventoryCount]);

        $inventory->save();

        return redirect()->back();

    }
}
