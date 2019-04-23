<div class="menu-trigger">
  <span></span>
  <span></span>
  <span></span>
</div>
<header class="fixed-menu">
  <div class="nav-wraper">
    <div class="navbar">
      <li class="nav-item"><a class="nav-link" href="welcome"> login</a></li>
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
        <li class="nav-item"><a class="nav-link" href="welcome"> home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{action('PaginaController@desarrollador')}}">Desarrolladores</a></li>
        <li class="nav-item"><a class="nav-link" href="menu.html">menu</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('mesas.index')}}">Mesas</a></li>
        <li class="nav-item"><a class="nav-link" href="Chefs.html">Chefs</a></li>
        <li class="nav-item submenu dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">Pages</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="elements.html">element</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>
