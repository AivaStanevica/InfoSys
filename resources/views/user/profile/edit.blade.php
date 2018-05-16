@extends('user.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h1>Mans Profils</h1>
                        <hr>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('userUpdate',$user->id)}}">

                            {{csrf_field()}}
                            {{ method_field('PATCH') }}
                            <div class="form-row">
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="userName">Vārds</label>
                                    <input type="text" class="form-control" id="userName" name="userName" value="{{$user->name}}" required>
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="userSurname">Uzvārds</label>
                                    <input type="text" class="form-control" id="userSurname" name="userSurname" value="{{$user->surname}}" required>
                                </div>

                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="email">Epasts</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required>
                                </div>
                                <div class="form-group col-md-6 col-lg-2">
                                    <label for="phoneNr">Telefons</label>
                                    <input type="text" class="form-control" id="phoneNr" name="phoneNr" value="{{$user->phone}}" required>
                                </div>
                                <div class="form-group col-md-5 col-lg-2">
                                    <label for="studentId">Stud. apliecības numurs</label>
                                    <input type="text" class="form-control" id="studentId" name="studentId" value="{{$user->student_id}}" required>
                                </div>
                                <div class="form-group col-md-2 col-lg-1">
                                    <label for="">Kurss</label>
                                    <select id="course" class="form-control" name="course">
                                        @for ($i = 1; $i < 7; $i++)
                                        <option value="{{$i}}" @if ($i==$user->course) selected @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group col-md-5 col-lg-3">
                                    <label for="">Studiju programma</label>
                                    <select id="studyProgram" class="form-control" name="studyProgram">
                                        @foreach($studies as $study)
                                            <option value="{{$study->id}}" @if ($study->study_program==$user->study_program) selected @endif>{{$study->study_program}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="email2">Datoriķu epasts</label>
                                    <input type="email" class="form-control" id="email2" name="email2" value="{{$user->email2}}" required>
                                </div>
                                <div class="form-group col-md-3 col-lg-2">
                                    <label for="role">Loma</label>
                                    <select id="role" class="form-control" name="role" value="{{$user->role_id}}">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}" @if ($role->id==$user->role->id) selected @endif>{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="">Virziens</label>
                                    <select id="direction" class="form-control" name="direction">
                                        @foreach($directions as $direction)
                                            <option value="{{$direction->direction}}" @if ($direction->direction==$user->direction) selected @endif>{{$direction->direction}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-lg-7">
                                    <label for="addition">Papildus</label>
                                    <input type="text" class="form-control" id="addition" name="addition" value="{{$user->addition}}">
                                </div>

                                <div class="form-group col-md-12 col-lg-5">
                                    <label for="address">Adrese</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
                                </div>
                                <div class="form-group col-md-7 col-lg-4">
                                    <label for="bankAccount">Bankas konts</label>
                                    <input type="text" class="form-control" id="bankAccount" name="bankAccount" value="{{$user->bank_account}}">
                                </div>
                                <div class="form-group col-md-5 col-lg-3">
                                    <label for="personID">Personas kods</label>
                                    <input type="text" class="form-control" id="personId" name="personCode" value="{{$user->person_code}}">
                                </div>
                                <div class="form-group col-md-12 col-lg-12">
                                    <label for="description">Apraksts/Spējas/Intereses</label>
                                    <textarea class="form-control" id="description" rows="3" name="description">{{$user->description}}</textarea>
                                </div>
                                {{--<form>--}}
                                {{--<div class="form-group">--}}
                                {{--<label for="profilePic">Profila bilde</label>--}}
                                {{--<input type="file" class="form-control-file" id="profilePic">--}}
                                {{--</div>--}}
                                {{--</form>--}}
                            </div>
                            <br>
                            <h3>Paroles maiņa</h3>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-lg-4">
                                    <label for="oldPassword">Vecā parole</label>
                                    <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                                </div>
                                <div class="form-group col-md-4 col-lg-4">
                                    <label for="newPassword">Jaunā parole</label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword">
                                </div>
                                <div class="form-group col-md-4 col-lg-4">
                                    <label for="newPasswordComformation">Jaunās paroles atkārtojums</label>
                                    <input type="password" class="form-control" id="newPasswordComformation" name="newPasswordComformation">
                                </div>
                                <button type="submit" class="btn btn-primary">Saglabāt</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

