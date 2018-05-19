@extends('uploads.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Datu krātuve</h1>
                        <hr>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('uploadsStore')}}" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="name">Nosaukums</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group col-md-3 col-lg-4">
                                    <label for="description">Komentārs</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                </div>
                                <div class="form-group col-md-2 col-lg-2">
                                    <label for="folder">Mape</label>
                                    <select id="folder" class="form-control" name="folder">
                                        @foreach($folders as $folder)
                                            <option value="{{$folder->id}}">{{$folder->name}}</option>
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
                                <div class="form-group col-md-2 col-lg-1">
                                    <div class="form-check mt-4 pt-3">
                                        <input class="form-check-input" type="checkbox" name="private" value="1" id="private">
                                        <label class="form-check-label" for="private">
                                            Privāts
                                        </label>
                                    </div>
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
                        {{--<a href="{{ route('showPrivate') }}" class="btn btn-primary mb-2 float-right">Privāts</a>--}}


                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nosaukums</th>
                                    <th scope="col">Komentārs</th>
                                    <th scope="col">Mape
                                    @foreach($uploads as $upload)
                                    @if($upload->project['name']!==null)<th scope="col">Projekts</th>@endif
                                    @endforeach
                                    <th scope="col" style="width: 70px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($uploads as $upload)
                                    <tr>
                                        <th scope="row">{{$upload->id}}</th>
                                        <td>@if($upload->private===1)<i class="fas fa-lock"></i>@endif {{$upload->name}}</td>
                                        <td>{{$upload->description}}</td>
                                        <td>{{$upload->folder['name']}}</td>
                                       @if($upload->project['name']!==null) <td>{{$upload->project['name']}}</td>@else<td></td> @endif
                                        <td>
                                            {{--@if($upload->file)<i class="far fa-file mr-2" onclick="{{(new \App\Http\Controllers\UploadsController())->download($upload->file)}}"></i>@endif--}}
                                                @if($upload->file)<i class="far fa-file mr-2"></i>@endif

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

