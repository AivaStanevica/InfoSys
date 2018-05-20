<?php

namespace App\Http\Controllers;

use App\Lend;
use App\Inventory;
use Illuminate\Http\Request;

class LendController extends Controller
{
    public function store(Request $request){

        $this->validate($request, [
            'lendName' => 'required',
            'lendPhone' => 'required',
            'lendEmail' => 'required',
        ]);

        Lend::create([
            'inventory_id'=>request('inventoryId'),
            'lent_by'=>\Auth::user()->id,
            'lent_to' => request('lendName'),
            'number'=> request('lendPhone'),
            'email'=> request('lendEmail'),
            'comment' => request('lendComment'),
        ]);

        return redirect()->back();
    }
}
