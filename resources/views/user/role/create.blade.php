@extends('user.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Pievienot jaunu lomu</h1>
                        <hr>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('roleStore')}}">

                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-md-4 col-lg-4">
                                    <label for="roleName">Lomas nosaukums</label>
                                    <input type="text" class="form-control" id="userName" name="roleName">
                                </div>
                                <div class="form-group col-md-8 col-lg-8">
                                    <label for="description">Apraksts</label>
                                    <input type="text" class="form-control" id="description" name="roleName">
                                </div>
                            </div>
                                <table class="table table-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nosaukums</th>
                                            <th scope="col">Apraksts</th>
                                            <th scope="col">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="finance_0">
                                                    <label class="custom-control-label" for="finance_0"></label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="3" class="text-center text-uppercase font-weight-bold">Lietotāja tiesības</td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user_0">
                                                    <label class="custom-control-label" for="user_0"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach($perms as $perm)
                                        @if($perm->group=='user')
                                        <tr>
                                            <th scope="row">{{$perm->id}}</th>
                                            <td>{{$perm->display_name}}</td>
                                            <td>{{$perm->description}}</td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="user_{{$perm->id}}">
                                                    <label class="custom-control-label" for="user_{{$perm->id}}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                        <tr>
                                            <td colspan="3" class="text-center text-uppercase font-weight-bold">Finanšu tiesības</td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="finance_0">
                                                    <label class="custom-control-label" for="finance_0"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        @foreach($perms as $perm)
                                        @if($perm->group=='finance')
                                            <tr>
                                                <th scope="row">{{$perm->id}}</th>
                                                <td>{{$perm->display_name}}</td>
                                                <td>{{$perm->description}}</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="finance_{{$perm->id}}">
                                                        <label class="custom-control-label" for="finance_{{$perm->id}}"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                        @endforeach

                                    </tbody>

                                </table>

                            <button type="submit" class="btn btn-primary">Saglabāt</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
