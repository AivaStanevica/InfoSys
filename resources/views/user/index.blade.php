@extends('layouts.app')

@section('section')
@section('menu')
    <div class="secondNav list-group">
        <a href="{{ route('user', Auth::user()->id) }}" class="list-group-item list-group-item-action">Profils</a>
        <a href="{{ route('usersList') }}" class="list-group-item list-group-item-action">Lietotāji</a>
        <a href="{{ route('roles') }}" class="list-group-item list-group-item-action">Lomas</a>
        <a href="{{ route('showPending') }}" class="list-group-item list-group-item-action">Neaktīvie lietotāji</a>
    </div>
@endsection
@yield('content')
@endsection