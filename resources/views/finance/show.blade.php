@extends('finance.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Finanšu pārskats</h1>
                        <hr>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('transactionStore')}}" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-md-2 col-lg-2">
                                    <label for="sum">Summa</label>
                                    <input type="text" class="form-control" id="sum" name="sum" required>
                                </div>
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="name">Nosaukums</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="description">Komentārs</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                </div>
                                <div class="form-group col-md-2 col-lg-2">
                                    <label for="source">Avots</label>
                                    <select id="source" class="form-control" name="source">
                                        @foreach($finances as $finance)
                                            <option value="{{$finance->id}}">{{$finance->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2 col-lg-2">
                                    <label for="project">Projekts</label>
                                    <select id="project" class="form-control" name="project">
                                        <option value=""></option>
                                        @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="btn btn-primary" for="uploadFile">
                                        <input id="uploadFile" type="file" name="file" style="display:none"
                                               onchange="$('#uploadFileInfo').html(this.files[0].name)">
                                        Pievienot datni
                                    </label>
                                    <span class='label label-info' id="uploadFileInfo"></span>

                                    <button type="submit" class="btn btn-primary float-right">Pievienot</button>
                                </div>
                            </div>
                        </form>
                        <hr class=" mt-0 pb-1">
                        <div class="row mb-3">
                            @foreach($finances as $finance)
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                      {{$finance->name}}:  <b>{{(new \App\Http\Controllers\TransactionsController())->sum($finance->id)}}</b>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>

                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    {{--<th scope="col">Loma</th>--}}
                                    <th scope="col">Summa</th>
                                    <th scope="col">Nosaukums</th>
                                    <th scope="col">Komentārs</th>
                                    <th scope="col">Avots</th>
                                    <th scope="col">Projekts</th>
                                    <th scope="col" style="width: 70px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $action)
                                    <tr>
                                        <th scope="row">{{$action->id}}</th>
                                        <td>{{$action->sum}}</td>
                                        <td>{{$action->name}}</td>
                                        <td>{{$action->description}}</td>

                                        <td>{{$action->finance->name}}</td>
                                        <td>{{$action->project['name']}}</td>

                                        {{--<td><input type="checkbox" {{$user->roles->hasPermission('show_finance_entry') ? 'checked' : '' }} name="show_finance_entry"></td>--}}
                                        <td>
                                            {{--@if($action->file)<i class="far fa-file mr-2" onclick="{{(new \App\Http\Controllers\TransactionsController())->download($action->file)}}"></i>@endif--}}
                                            @if($action->file)<i class="far fa-file mr-2"></i>@endif
                                            <i class="fas fa-info mr-2"></i><i class="fas fa-times"></i></td>
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

