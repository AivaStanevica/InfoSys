@extends('inventory.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Inventārs</h1>
                        <hr>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{route('inventoryStore')}}" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="name">Nosaukums</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group col-md-1 col-lg-1">
                                    <label for="units">Skaits</label>
                                    <input type="text" class="form-control" id="units" name="units" value="1" required>
                                </div>
                                <div class="form-group col-md-2 col-lg-2">
                                    <label for="type">Tips</label>
                                    <select id="type" class="form-control" name="project">
                                        <option value=""></option>
                                        @foreach($type as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2 col-lg-2">
                                    <label for="storage">Atrodas</label>
                                    <select id="storage" class="form-control" name="storage">
                                        @foreach($storages as $storage)
                                            <option value="{{$storage->id}}">{{$storage->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-lg-3">
                                    <label for="description">Komentārs</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                </div>

                                <div class="form-group col-md-1 col-lg-1" id="insertAfter">
                                    <p class="btn btn-primary" id="additionalBtn">+</p>
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
                        <div class="form-group col-md-4 col-lg-4">
                            <label for="project">Projekts</label>
                            <select id="project" class="form-control" name="project">
                                <option value=""></option>
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nosaukums</th>
                                    <th scope="col">Skaits</th>
                                    <th scope="col">Tips</th>
                                    <th scope="col">Atrodas</th>
                                    <th scope="col">Komentārs</th>
                                    <th scope="col" style="width: 100px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($inventory as $invent)
                                    @if($invent->units>0)
                                    <tr>
                                        <th scope="row">{{$invent->id}}</th>
                                        <td>@if($invent->avaliable===0)<i class="fas fa-lock"></i>@endif{{$invent->name}}</td>
                                        <td>{{$invent->units}}</td>
                                        <td>{{$invent->type}}</td>
                                        <td>{{$invent->storage->name}}</td>
                                        <td>{{$invent->description}}</td>
                                        <td>
                                            {{--@if($action->file)<i class="far fa-file mr-2" onclick="{{(new \App\Http\Controllers\TransactionsController())->download($action->file)}}"></i>@endif--}}
                                            <a data-toggle="modal" data-target="#sellInventory"><i class="fas fa-euro-sign mr-2"></i> </a>
                                            <i class="fas fa-info mr-2"></i>
                                            <i class="fas fa-pencil-alt mr-2"></i>
                                            @if($invent->avaliable===1)<a data-toggle="modal" data-target="#lendInventory"><i class="fas fa-hand-holding mr-2"></i></a>@endif
                                            <i class="fas fa-times"></i></td>
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

