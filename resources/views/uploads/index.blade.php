@extends('layouts.app')

@section('section')
@section('menu')
    <div class="secondNav list-group">
        <span href="#" class="list-group-item">Mape<a data-toggle="modal" data-target="#addFolder"><i class="fas fa-plus float-right pt-1"></i></a></span>
        @foreach($folders as $folder)
            <a href="{{ route('uploads', $folder->id) }}" class="list-group-item list-group-item-action" id="{{$folder->id}}">{{$folder->name}}</a>
        @endforeach
        <span href="#" class="list-group-item">Projekti<a data-toggle="modal" data-target="#addProject"><i class="fas fa-plus float-right pt-1"></i></a></span>
        @foreach($projects as $project)
            <a href="{{ route('project', $project->id) }}" class="list-group-item list-group-item-action" id="{{$project->id}}">{{$project->name}}</a>
        @endforeach

    </div>
@endsection
@yield('content')
@include('uploads.add_folder')
@include('project.add_project')
@endsection