@extends('user.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Izveidot profilu</h1>
                        <hr>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('userStore')}}">

                        {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="userName">Vārds</label>
                                    <input type="text" class="form-control" id="userName" name="userName">
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="userSurname">Uzvārds</label>
                                    <input type="text" class="form-control" id="userSurname" name="userSurname">
                                </div>

                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="email">Epasts</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group col-md-6 col-lg-2">
                                    <label for="phoneNr">Telefons</label>
                                    <input type="text" class="form-control" id="phoneNr" name="phoneNr">
                                </div>
                                <div class="form-group col-md-6 col-lg-2">
                                    <label for="studentId">Stud. apliecības numurs</label>
                                    <input type="text" class="form-control" id="studentId" name="studentId">
                                </div>
                                <div class="form-group col-md-2 col-lg-1">
                                    <label for="">Kurss</label>
                                    <select id="course" class="form-control" name="course">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-lg-3">
                                    <label for="">Studiju programma</label>
                                    <select id="studyProgram" class="form-control" name="studyProgram">
                                        <option value="Programmēšana un datortīklu administrēšana">Programmēšana un datortīklu administrēšana</option>
                                        <option value="Datorzinātnes Bakalaura">Datorzinātnes Bakalaura</option>
                                        <option value="Datorzinātnes Maģistra">Datorzinātnes Maģistra</option>
                                        <option value="Datorzinātnes Doktora">Datorzinātnes Doktora</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="email2">Datoriķu epasts</label>
                                    <input type="email" class="form-control" id="email2" name="email2">
                                </div>
                                <div class="form-group col-md-6 col-lg-5">
                                    <label for="address">Adrese</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group col-md-5 col-lg-3">
                                    <label for="bankAccount">Bankas konts</label>
                                    <input type="text" class="form-control" id="bankAccount" name="bankAccount">
                                </div>
                                <div class="form-group col-md-3 col-lg-2">
                                    <label for="personID">Personas kods</label>
                                    <input type="text" class="form-control" id="personId" name="personId">
                                </div>
                                <div class="form-group col-md-3 col-lg-2">
                                    <label for="">Loma</label>
                                    <select id="role" class="form-control" name="role">
                                        <option>Admin</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-lg-12">
                                    <label for="description">Apraksts</label>
                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                </div>
                                {{--<form>--}}
                                {{--<div class="form-group">--}}
                                {{--<label for="profilePic">Profila bilde</label>--}}
                                {{--<input type="file" class="form-control-file" id="profilePic">--}}
                                {{--</div>--}}
                                {{--</form>--}}
                            </div>
                            <br>
                            <h3>Parole</h3>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-lg-4">
                                    <label for="newPassword">Jaunā parole</label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword">
                                </div>
                                <div class="form-group col-md-4 col-lg-4">
                                    <label for="newPassword2">Jaunās paroles atkārtojums</label>
                                    <input type="password" class="form-control" id="newPassword2" name="newPassword2">
                                </div>
                                <button type="submit" class="btn btn-primary col-md-4">Saglabāt</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

