<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><img src="./../../img/logo3.png" width="50" height="50"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if( !Auth::check())
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Juegos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-warning" name="Accion" href="{{url('searchForm/search/Accion')}}">Accion</a>
                            <a class=" dropdown-item text-warning" name="Aventuras" href="{{url('searchForm/search/Aventura')}}">Aventuras</a>
                            <a class="dropdown-item text-warning" name="Deportes" href="{{url('searchForm/search/Deportes')}}">Deportes</a>
                            <a class="dropdown-item text-warning" name="RPG" href="{{url('searchForm/search/RPG')}}">RPG</a>
                        </div>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search"  action="{{url('searchForm/searchredirect')}}">
                    <div class="form-group">
                        </br>
                        <input type="text" class="form-control" name='search' placeholder="Buscar ..." />
                    </div>
                </form>
                <ul class="navbar-nav">
                <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                    <a class="nav-link text-warning" href="{{url('/login')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Login
                    </a>
                </li>
                <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                    <a class="nav-link text-warning" href="{{url('/user/create')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Register
                    </a>
                </li>
                </ul>
            </div>
        @endif
        @if( Auth::check() && !auth()->user()->admin )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link text-warning" href="{{url('/catalog')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Juegos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-warning" name="Accion" href="{{url('searchForm/search/Accion')}}">Accion</a>
                            <a class=" dropdown-item text-warning" name="Aventuras" href="{{url('searchForm/search/Aventura')}}">Aventuras</a>
                            <a class="dropdown-item text-warning" name="Deportes" href="{{url('searchForm/search/Deportes')}}">Deportes</a>
                            <a class="dropdown-item text-warning" name="RPG" href="{{url('searchForm/search/RPG')}}">RPG</a>
                        </div>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search"  action="{{url('searchForm/searchredirect')}}">
                    <div class="form-group">
                        </br>
                        <input type="text" class="form-control" name='search' placeholder="Buscar ..." />
                    </div>
                </form>
                </ul>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <span class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-warning" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </span>
                        @endguest
                        <ul class="navbar-nav navbar-right">
                            <li class="nav-item">
                                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                    {{ csrf_field() }}

                                </form>
                            </li>
                        </ul>
            </div>
        @endif
        @if (auth()->check() && auth()->user()->admin)
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link text-warning" href="{{url('/catalog')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link text-warning" href="{{url('/user')}}">
                            Lista Usuarios
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Juegos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-warning" name="Accion" href="{{url('searchForm/search/Accion')}}">Accion</a>
                            <a class=" dropdown-item text-warning" name="Aventuras" href="{{url('searchForm/search/Aventura')}}">Aventuras</a>
                            <a class="dropdown-item text-warning" name="Deportes" href="{{url('searchForm/search/Deportes')}}">Deportes</a>
                            <a class="dropdown-item text-warning" name="RPG" href="{{url('searchForm/search/RPG')}}">RPG</a>
                        </div>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search"  action="{{url('searchForm/searchredirect')}}">
                    <div class="form-group">
                        </br>
                        <input type="text" class="form-control" name='search' placeholder="Buscar ..." />
                    </div>
                </form>
                </ul>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <span class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-warning" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </span>
                        @endguest
                        <ul class="navbar-nav navbar-right">
                            <li class="nav-item">
                                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                    {{ csrf_field() }}

                                </form>
                            </li>
                        </ul>
            </div>
        @endif
    </div>
</nav>