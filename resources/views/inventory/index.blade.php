@extends('layouts.app')

@section('section')
@section('menu')
    <div class="secondNav list-group">
        <span href="#" class="list-group-item">Glabātuve<a data-toggle="modal" data-target="#addStorage"><i class="fas fa-plus float-right pt-1"></i></a></span>
        @foreach($storages as $storage)
            <a href="{{ route('inventory', $storage->id) }}" class="list-group-item list-group-item-action" id="{{$storage->id}}">{{$storage->name}}</a>
        @endforeach
        <span href="#" class="list-group-item">Arhīvs</span>
        <span href="#" class="list-group-item">Aizdots</span>
        <span href="#" class="list-group-item">Tips<a data-toggle="modal" data-target="#addType"><i class="fas fa-plus float-right pt-1"></i></a></span>
        @foreach($type as $item)
            <a href="{{ route('inventory', $item->id) }}" class="list-group-item list-group-item-action" id="{{$item->id}}">{{$item->name}}</a>
        @endforeach

    </div>
@endsection
@yield('content')
@include('inventory.add_storage')
@include('inventory.add_type')
@endsection