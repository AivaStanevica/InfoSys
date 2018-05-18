@extends('user.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Neaktīvie lietotāji</h1>
                        <hr>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Vārds Uzvārds</th>
                                    <th scope="col">E-pasts</th>
                                    <th scope="col" class="text-center pr-2"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    @if($user->active==0)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}  {{$user->surname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a href="{{ route('user',$user->id) }}"><i class="fas fa-user pr-2"></i></a>
                                            <form method="POST" action="{{ route('active',$user->id)}}">

                                                {{csrf_field()}}
                                                {{ method_field('PATCH') }}

                                                <input name="id" value="{{$user->id}}" type="hidden">
                                                <input name="active" value="{{$user->active}}" type="hidden">
                                                <button type="submit" style="background: none; border:none"><i class="fas fa-check"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
