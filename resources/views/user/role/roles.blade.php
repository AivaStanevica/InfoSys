@extends('user.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Lomas</h1>
                        <hr>
                        <a href="{{ route('userRole') }}" class="btn btn-primary mb-2 float-right">Lomas un lietotāji</a>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    {{--<th scope="col">Loma</th>--}}
                                    <th scope="col">Loma</th>
                                    <th scope="col">Apraksts</th>
                                    <th scope="col" class="text-center pr-2"><a href="{{ route('roleCreate') }}"><i class="fas fa-plus"></i></a></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <th scope="row">{{$role->id}}</th>
                                        {{--<td>{{$user->role->permission->name}} </td>--}}
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->description}}</td>
                                        <td><i class="fas fa-user pr-2"></i><i class="fas fa-trash-alt"></i></td>
                                    </tr>
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
