@extends('user.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Paplašinātais lietotāju saraksts</h1>
                        <hr>
                        <a href="{{ route('usersList') }}" class="btn btn-primary mb-2 float-right">Kompakts saraksts</a>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Vārds Uzvārds</th>
                                    <th scope="col">Komisija</th>
                                    <th scope="col">Amats</th>
                                    <th scope="col">E-pasts</th>
                                    <th scope="col">Dat. epasts</th>
                                    <th scope="col">Telefons</th>
                                    <th scope="col">Stud.apl.nr.</th>
                                    <th scope="col">Programma</th>
                                    <th scope="col">Kurss</th>
                                    <th scope="col">Papildus</th>
                                    <th scope="col">Adrese</th>
                                    <th scope="col">Bankas nr.</th>
                                    <th scope="col">Pers.kods</th>
                                    <th scope="col">Spējas</th>
                                    <th scope="col" class="text-center pr-2"><i class="fas fa-plus"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    @if($user->active==1)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}  {{$user->surname}}</td>
                                        <td>{{$user->direction}}  </td>
                                        <td>{{$user->role->name}}  </td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->email2}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->student_id}}</td>
                                        <td>{{$user->study_program}}</td>
                                        <td>{{$user->course}}</td>
                                        <td>{{$user->addition}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->bank_account}}</td>
                                        <td>{{$user->person_code}}</td>
                                        <td>{{$user->description}}</td>
                                        <td><a href="{{ route('user',$user->id) }}"><i class="fas fa-user pr-2"></i></a><i class="fas fa-trash-alt"></i>
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
