<nav class="uk-navbar-container navbar navbar-interno" uk-navbar>
  <div class="uk-navbar-left btn-menu-mobile">
    <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: #offcanvas-push" uk-navbar-toggle-icon data-btn-mobile href="#"></a>
    <span class="uk-text-small uk-hidden@s">MENU</span>
  </div>
  
  @if($menu == "login" || $menu == "cadastro" || $menu == "recuperar-senha")
    <div class="uk-navbar uk-margin-auto logo-cabecalho">
      <a href="{{route('home')}}" class="uk-navbar-item uk-logo">
        <img src="{{asset('/img/logo.svg')}}" alt="Logo do site">
      </a>
    </div>

  @else
    <div class="uk-navbar-left logo-cabecalho">
      <a href="{{route('home')}}" class="uk-navbar-item uk-logo">
        <img src="{{asset('/img/logo.svg')}}" alt="Logo do site">
      </a>
    </div>
    <div class="uk-navbar-right uk-visible@s">
      <ul class="uk-navbar-nav menu">
        @if(Route::has('login'))
          @auth
            <li><a href="#">Sobre</a></li>
            @if(Auth::user()->categoria === 'ADMINISTRADOR')
            <li>
              <a href="{{route('usuarios.index')}}" class="@if(request()->is('usuarios') || request()->is('usuarios/gerenciarsolicitacoes')) active @endif">Usuários</a>
            </li>
            @endif
            <li>
              <a href="#modal-sair" uk-toggle>Sair</a>
              @include('components.modal', ['id' => 'modal-sair', 'texto' => 'Deseja realmente sair?'])                    
            </li>

          @else
            <li>
              <a class="uk-button uk-border-rounded btn-login" href="{{route('login')}}">Login</a>
            </li>

            @if(Route::has('register'))
              <li>
                <a class="uk-button uk-border-rounded" href="{{route('cadastro.index')}}">Cadastrar-se</a>
              </li>
            @endif
          @endauth
        @endif
      </ul>
    </div>
  @endif
</nav>

<!-- MENU MOBILE    -->
<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true" data-menu-mobile>
  <div class="uk-offcanvas-bar menu-mobile">
    <a class="uk-navbar-item uk-logo uk-width-1-2 uk-align-center uk-margin-small" href="{{route('home')}}">
      <img src="{{asset('/img/logo.svg')}}" alt="Logo do site">
    </a>
    <hr class="divisor">
    <ul uk-nav>
      @if(Route::has('login'))
        @auth
          <li>
            <i class="material-icons-round">info</i>
            <a href="#">Sobre</a>
          </li>
          @if(Auth::user()->categoria === 'ADMINISTRADOR')
            <li class="uk-flex uk-flex-middle @if(request()->is('usuarios') || request()->is('usuarios/gerenciarsolicitacoes')) active @endif">
              <i class="material-icons-round">supervised_user_circle</i>
              <a href="{{route('usuarios.index')}}">Usuários</a>
            </li>
          @endif
          <li class="uk-flex uk-flex-middle">
            <i class="material-icons-round">exit_to_app</i>
            <a href="#modal-sair" uk-toggle>Sair</a>
            @include('components.modal', 
              ['id' => 'modal-sair', 'texto' => 'Deseja realmente sair?'])
          </li>

          @else
            <li class="@if(request()->is('login')) active @endif">
              <a href="{{route('login')}}">
                <i class="material-icons-round">input</i>
                Login
              </a>
            </li>

            @if(Route::has('register'))
              <li class="@if(request()->is('cadastro')) active @endif">
                <a href="{{route('cadastro.index')}}">
                  <i class="material-icons-round">assignment</i>
                  Cadastrar-se
                </a>
              </li>
            @endif
          @endauth
        @endif
    </ul>
  </div>
</div>