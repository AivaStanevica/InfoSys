@extends('user.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Lietotāji un lomas</h1>
                        <hr>
                        <a href="" class="btn btn-primary mb-2 float-right">Lomu saraksts</a>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Vārds Uzvārds</th>
                                    <th scope="col">Loma</th>
                                    <th scope="col" class="text-center pr-2"><i class="fas fa-plus"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}  {{$user->surname}}</td>
                                        <td>
                                            <select class="custom-select">
                                                @foreach($roles as $role)
                                                <option value="{{$role->id}}" @if ($role->id==$user->role->id) selected @endif>{{$role->name}}</option>
                                                @endforeach

                                            </select>
                                        </td>
                                        {{--<td><input type="checkbox" {{$user->roles->hasPermission('show_finance_entry') ? 'checked' : '' }} name="show_finance_entry"></td>--}}
                                        <td><a href="{{ route('user',$user->id) }}"><i class="fas fa-user pr-2"></i></a><i class="fas fa-trash-alt"></i></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary">Saglabāt</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
