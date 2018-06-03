<div class="container-fluid header">
  <div class="row">
    <div class="col-md-1">
      <a href="/"><img class="logo" src="images/logo.png"></img></a>
    </div>
    <div class="col-md-1">
      <a href="#"><i class="logo menu-icon fas fa-bars fa-2x"></i></a>
    </div>
    <div class="col-md-3">
      <div class="input-group search">
        <input type="text" class="form-control"  placeholder="Search" >
          <span class="input">
            <button type="submit">
              <i class="logo fas fa-search fa-2x"></i>
            </button>
          </span>
      </div>
    </div>
    <div class="col-md-2">
      Hazte Premium <img class="logo-circle" src="images/logo-circulo.png"></img>
    </div>
    @if (Route::has('login'))
            @auth
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @else
            <div class="col-md-1">
              Login <a href="{{ route('login') }}"><i class="logo menu-astronaut fas fa-user-astronaut fa-2x"></i></a>
            </div>
            <div class="col-md-2">
              Registro <a href="{{ route('register') }}"><i class="logo menu-astronaut fas fa-user fa-2x"></i></a>
            </div>
            @endauth
    @endif

    <div class="col-md-2">
      Mi carrito <a href="#"><i class="logo menu-cart fas fa-shopping-cart fa-2x"></i></a>
    </div>
  </div>
</div>
