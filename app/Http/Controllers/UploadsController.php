<?php

namespace App\Http\Controllers;

use App\Project;
use App\Upload;
use App\Folder;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function show($id=null){

        if($id){
            $uploads = Upload::where('folder_id', $id)->latest()->get();
        }
        else{
            $uploads = Upload::latest()->get();
        }
        $folders = Folder::all();
        $projects= Project::all();
        $users = User::all();

        return view('uploads.show', compact('uploads','folders','projects','users'));
    }
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'file'=>'required'
        ]);

        Upload::create([
            'name' => request('name'),
            'description' => request('description'),
            'folder_id'=>request('folder'),
            'project_id'=>request('project'),
            'private'=>request('private'),
            'file'=>request('file')->getClientOriginalName() //izdomāt, kā glabāt datubāzē šo nosaukumu
        ]);

        //saglaba failu ar tādu pašu vārdu kā lietotaja - nav labi, jo var nebūt ASCII
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/upload', $name);
        }
        return redirect()->back();

    }
    public function download($upload){

        return Storage::download(base_path()."/storage/app/public/upload/", $upload);

    }
}
