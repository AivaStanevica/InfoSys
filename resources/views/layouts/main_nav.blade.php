
<div class="nav col-md-2" id="nav">
    <div class="firstNav list-group">
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}


        <a href="{{ route('finance',1) }}" class="list-group-item list-group-item-action"><i class="fas fa-euro-sign"></i></a>
        <a href="{{ route('inventory') }}" class="list-group-item list-group-item-action"><i class="fas fa-box"></i></a>
        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-folder"></i></a>
        <a href="{{ route('user', Auth::user()->id) }}" class="list-group-item list-group-item-action"><i class="fas fa-user"></i></a>
        <a class="logOut list-group-item list-group-item-action" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @yield('menu')

    </div>
</div>