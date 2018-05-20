<?php

namespace App\Http\Controllers;

use App\Type;
use App\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function store(Request $request){

        $this->validate($request, [
            'storageName' => 'required',
        ]);

        Storage::create([
            'name' => request('storageName'),
            'description' => request('storageDescription'),
        ]);

        return redirect()->back();
    }
    public function storeType(Request $request){

        $this->validate($request, [
            'typeName' => 'required',
        ]);

        Type::create([
            'name' => request('typeName'),
        ]);

        return redirect()->back();
    }
}
