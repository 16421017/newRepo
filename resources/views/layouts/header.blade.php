<nav class="navbar fixed-top navbar-expand-lg" id="navbar">
  <div class="container">
    <a class="navbar-brand text-uppercase" href="{{url('/index')}}">Pesona Pesawaran</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mx-auto text-uppercase">
          <li class="nav-item">
              <a class="nav-link" href="{{url('/index')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{url('/blog')}}">Blog</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('beach')}}">Beach</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{url('/gunung')}}">Mountain</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Paket Trevelling
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{url('/Trippackages')}}">Solo Package</a>
                  <a class="dropdown-item" href="{{('/family')}}">family package</a>
              </div>
          </li>
        </ul>
    </div>
    <a class="nav-item nav-link text-uppercase" href="#">Login</a>
  </div>
</nav>