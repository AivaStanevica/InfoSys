@extends('user.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Lietotāji</h1>
                        <hr>
                        <a href="{{ route('usersListExpanded') }}" class="btn btn-primary mb-2 float-right">Paplašināts saraksts</a>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    {{--<th scope="col">Loma</th>--}}
                                    <th scope="col">Vārds Uzvārds</th>
                                    <th scope="col">Komisija</th>
                                    <th scope="col">Amats</th>
                                    <th scope="col">E-pasts</th>
                                    <th scope="col">Dat. epasts</th>
                                    <th scope="col">Telefons</th>
                                    <th scope="col" class="text-center pr-2"><i class="fas fa-plus"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    @if($user->active==1)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    {{--<td>{{$user->role->name}} </td>--}}
                                    <td>{{$user->name}}  {{$user->surname}}</td>
                                    <td>{{$user->direction}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->email2}}</td>
                                    <td>{{$user->phone}}</td>
                                    {{--<td><input type="checkbox" {{$user->roles->hasPermission('show_finance_entry') ? 'checked' : '' }} name="show_finance_entry"></td>--}}
                                    <td><a href="{{ route('user',$user->id) }}"><i class="fas fa-user pr-2"></i></a>
                                        <form method="POST" action="{{ route('deleteUser',$user->id)}}">

                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}

                                            <input name="id" value="{{$user->id}}" type="hidden">
                                            <button type="submit" style="background: none; border:none"><i class="fas fa-trash-alt pr-2"></i></button>
                                        </form>
                                        <form method="POST" action="{{ route('active',$user->id)}}">

                                            {{csrf_field()}}
                                            {{ method_field('PATCH') }}

                                            <input name="id" value="{{$user->id}}" type="hidden">
                                            <input name="active" value="{{$user->active}}" type="hidden">
                                            <button type="submit" style="background: none; border:none"><i class="fas fa-times"></i></button>
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
