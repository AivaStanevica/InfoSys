@extends('layouts.app')

@section('section')
@section('menu')
    <div class="secondNav list-group">
        <span href="#" class="list-group-item">Avots<a data-toggle="modal" data-target="#addFinance"><i class="fas fa-plus float-right pt-1"></i></a></span>
        @foreach($finances as $finance)
        <a href="{{ route('finance', $finance->id) }}" class="list-group-item list-group-item-action" id="{{$finance->id}}">{{$finance->name}}</a>
        @endforeach
        <span href="#" class="list-group-item">Projekti<a data-toggle="modal" data-target="#addProject"><i class="fas fa-plus float-right pt-1"></i></a></span>
        @foreach($projects as $project)
            <a href="{{ route('project', $project->id) }}" class="list-group-item list-group-item-action" id="{{$project->id}}">{{$project->name}}</a>
        @endforeach
    </div>
@endsection
@yield('content')
@include('finance.add_section')
@include('project.add_project')
@endsection