@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--@section('menu')--}}
    {{--<div class="secondNav list-group">--}}
        {{--<a href="#" class="list-group-item list-group-item-action">sūdiņš</a>--}}
        {{--<a href="#" class="list-group-item list-group-item-action">sūdiņš 1</a>--}}
        {{--<a href="#" class="list-group-item list-group-item-action">sūdiņš 2</a>--}}
    {{--</div>--}}
{{--@endsection--}}
