<div class="menu-trigger">
  <span></span>
  <span></span>
  <span></span>
</div>
<header class="fixed-menu">
  <div class="nav-wraper">
    <div class="navbar">
      @guest
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item submenu dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
              </a>

              <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a></li>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </ul>
          </li>
      </ul>
      @endguest
    </div>
  </div>
  <span class="menu-close"><i class="fa fa-times"></i></span>
  <div class="menu-header">
    <div class="logo d-flex justify-content-center">
      <img src="{{asset('img/logo.png')}}" alt="">
    </div>
  </div>
  <div class="nav-wraper">
    <div class="navbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ url('/welcome') }}"> home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{action('PaginaController@desarrollador')}}">Desarrolladores</a></li>
        @if(Auth::check())
        <li class="nav-item"><a class="nav-link" href="{{route('productos.index')}}">menu</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('mesas.index')}}">Mesas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('pedidos.index')}}">Pedidos</a></li>
        @endif
        <li class="nav-item submenu dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">Archivos</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('archivos.index')}}">Mis archivos</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>
