<div class="menu-trigger">
  <span></span>
  <span></span>
  <span></span>
</div>
<header class="fixed-menu">
  <span class="menu-close"><i class="fa fa-times"></i></span>
  <div class="menu-header">
    <div class="logo d-flex justify-content-center">
      <img src="img/logo.png" alt="">
    </div>
  </div>
  <div class="nav-wraper">
    <div class="navbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="welcome"> home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{action('PaginaController@desarrollador')}}">Desarrolladores</a></li>
        <li class="nav-item"><a class="nav-link" href="menu.html">menu</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('pedidos.index')}}">Pedidos</a></li>
        <li class="nav-item"><a class="nav-link" href="Chefs.html">Chefs</a></li>
        <li class="nav-item submenu dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">Pages</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="elements.html">element</a></li>
          </ul>
        </li>
        <li class="nav-item submenu dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">Blog</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.html">contact</a></li>
      </ul>
    </div>
  </div>
</header>
