<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
  <a class="navbar-brand mr-auto __logo" href="/"><img src="img/logo_wwm.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" name="button">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-md-auto">
      <li class="nav-item">
        <a class="nav-link" href="#comunidad">comunidad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#caracteristicas">caracteristicas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preguntas">preguntas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">contacto</a>
      </li>
      <li class="nav-item">
        <a class= "__login __botones" href="/login">ingresar</a>
      </li>
      <li class="nav-item">
        <a class= "__registrarse __botones" href="/register">registro</a>
      </li>
    </ul>
  </div>
</nav>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->username }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>
