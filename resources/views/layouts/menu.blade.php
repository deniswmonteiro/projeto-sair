<nav class="uk-navbar-container navbar navbar-interno" uk-navbar>
  <div class="uk-navbar-left btn-menu-mobile">
    <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: #offcanvas-push" uk-navbar-toggle-icon data-btn-mobile href="#"></a>
    <span class="uk-text-small uk-hidden@s">MENU</span>
  </div>
  <div class="uk-navbar-left logo-cabecalho">
    <a href="/" class="uk-navbar-item uk-logo">
      <img src="{{asset('../img/logo.svg')}}" alt="Logo do site">
    </a>
  </div>
  <div class="uk-navbar-right uk-visible@s">
    <ul class="uk-navbar-nav menu">
      @if(Route::has('login'))
        @auth
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="usuarios.php">Usuários</a></li>
          <li>
            <a class="nav-link" onclick="event.preventDefault(); document.querySelector('form.logout').submit()">Logout</a>
            <form action="{{route('logout')}}" class="logout" method="post" style="display:none;">
              @csrf
            </form>                          
          </li>

        @else
          <li>
            <a class="uk-button uk-border-rounded btn-login" href="{{route('login')}}">Login</a>
          </li>

          @if(Route::has('register'))
            <li>
              <a class="uk-button uk-border-rounded" href="{{ route('register') }}">Cadastrar-se</a>
            </li>
          @endif
        @endauth
      @endif
    </ul>
  </div>
</nav>

<!-- MENU MOBILE    -->
<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true" data-menu-mobile>
  <div class="uk-offcanvas-bar menu-mobile">
    <a class="uk-navbar-item uk-logo uk-width-1-2 uk-align-center uk-margin-small" href=".">
      <img src="{{asset('../img/logo.svg')}}" alt="Logo do site">
    </a>
    <hr class="divisor">
    <ul class="uk-nav">
      <li class="uk-flex uk-flex-middle" data-link="sobre">
        <i class="material-icons-round">info</i>
        <a href="sobre.html">Sobre</a>
      </li>
      <li class="uk-flex uk-flex-middle" data-link="login">
        <i class="material-icons-round">exit_to_app</i>
        <a href="#">Login</a>
      </li>
    </ul>
  </div>
</div>