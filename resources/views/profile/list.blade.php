@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vārds Uzvārds</th>
                        <th scope="col">Loma</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->role_id}} </td>
                        <td><i class="fas fa-eye pr-2"></i><i class="fas fa-pencil-alt pr-2"></i><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>
                <div class="btn btn-primary float-right">Saglabāt</div>
            </div>
        </div>
    </div>
@endsection
@section('menu')
    <div class="secondNav list-group">
        <a href="#" class="list-group-item list-group-item-action">Profils</a>
        <a href="#" class="list-group-item list-group-item-action">Lietotāji</a>
        <a href="#" class="list-group-item list-group-item-action">Tiesības</a>
        <a href="#" class="list-group-item list-group-item-action">Lomas</a>
    </div>
@endsection
