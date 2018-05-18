@extends('layouts.app')

@section('section')
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
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">

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
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="phone">Telefons</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group col-md-6 col-lg-3">
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
                            <div class="form-group col-md-4 col-lg-4">
                                <label for="studyProgram">Studiju programma</label>
                                <select id="studyProgram" class="form-control" name="studyProgram">
                                    <option value="Programmēšana un datortīklu administrēšana">Programmēšana un datortīklu administrēšana</option>
                                    <option value="Datorzinātnes Bakalaura">Datorzinātnes Bakalaura</option>
                                    <option value="Datorzinātnes Maģistra">Datorzinātnes Maģistra</option>
                                    <option value="Datorzinātnes Doktora">Datorzinātnes Doktora</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-12">
                                <label for="description">Apraksts/Spējās/Intereses</label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>

                        </div>
                        <br>
                        <h3>Parole</h3>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-4 col-lg-4">
                                <label for="password">Jaunā parole</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group col-md-4 col-lg-4">
                                <label for="password-confirm">Jaunās paroles atkārtojums</label>
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Saglabāt</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
