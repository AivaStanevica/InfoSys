<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Upload;
use Illuminate\Http\Request;

class FoldersController extends Controller
{
    public function index(){
        $folders = Folder::all();
        $uploads = Upload::all();

        return view('uploads.show', compact('folders','uploads'));
    }
    public function showPrivate(){
        $folders = Folder::all();
        $uploads = Upload::all();

        return view('uploads.show_private', compact('folders','uploads'));
    }
    public function store(Request $request){

        $this->validate($request, [
            'folderName' => 'required',
        ]);

        Folder::create([
            'name' => request('folderName'),
            'description' => request('folderDescription'),
        ]);

        return redirect()->back();
    }
}
