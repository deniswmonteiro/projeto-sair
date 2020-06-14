<nav class="uk-navbar-container navbar navbar-interno" uk-navbar>
  <div class="uk-navbar-left btn-menu-mobile">
    <a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-push" uk-navbar-toggle-icon data-btn-mobile href="#"></a>
    <span class="uk-text-small uk-hidden@m">MENU</span>
  </div>
  
  @if($menu == "login" || $menu == "cadastro" || $menu == "recuperar-senha")
    <div class="uk-navbar uk-margin-auto logo-cabecalho">
      <a href="{{route('home')}}" class="uk-navbar-item uk-logo">
        <img src="{{secure_asset('img/logo-sair-icone.svg')}}" alt="Logo do site">
      </a>
    </div>

  @else
    <div class="uk-hidden@m logo-cabecalho">
      <a href="{{route('home')}}" class="uk-navbar-item uk-logo">
        <img src="{{secure_asset('img/logo-sair-icone.svg')}}" alt="Logo do site">
      </a>
    </div>
    <div class="uk-visible@m uk-logo-cabecalho">
      <a href="{{route('home')}}" class="uk-navbar-item uk-logo">
        <img src="{{secure_asset('img/logo-sair.svg')}}" alt="Logo do site">
      </a>
    </div>
    <div class="uk-navbar-right uk-visible@m">
      <ul class="uk-navbar-nav menu">
        @if(Route::has('login'))
          @auth
            <li>
              <a href="#" class="@if((request()->is('terreo*')) || (request()->is('primeiroandar*')) || (request()->is('segundoandar*'))) active @endif">Andares</a>
              <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li>
                    <a href="{{route('terreo.index')}}" class="@if(request()->is('terreo*')) active @endif">Térreo</a>
                  </li>
                  <li>
                    <a href="{{route('primeiroandar.index')}}" class="@if(request()->is('primeiroandar*')) active @endif">1º Andar</a>
                  </li>
                  <li>
                    <a href="{{route('segundoandar.index')}}" class="@if(request()->is('segundoandar*')) active @endif">2º Andar</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="{{route('perfil.index')}}" class="@if(request()->is('perfil*')) active @endif">Perfil</a>
            </li>

            @if(Auth::user()->categoria === 'ADMINISTRADOR')
              <li>
                <a href="{{route('usuario.index')}}" class="@if(request()->is('usuario*')) active @endif">Usuários</a>
              </li>
              <li>
                <a href="{{route('solicitar.index')}}" class="@if(request()->is('solicitar*')) active @endif">Solicitações</a>
              </li>
            @endif

            <li>
              <a href="#modal-sair" uk-toggle>Sair</a>
              @include('components.modal',
              ['id' => 'modal-sair', 'texto' => 'Deseja realmente sair?', 'rota' => 'logout'])
            </li>
            
          @else
            <li>
              <a class="uk-button uk-border-rounded btn-login" href="{{route('login')}}">Login</a>
            </li>

            @if(Route::has('register'))
              <li>
                <a class="uk-button uk-border-rounded" href="{{route('cadastro.index')}}">
                  Cadastrar-se
                </a>
              </li>
            @endif
          @endauth
        @endif
      </ul>
    </div>
  @endif
</nav>

<!-- MENU MOBILE -->
<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true" data-menu-mobile>
  <div class="uk-offcanvas-bar menu-mobile">
    <a class="uk-navbar-item uk-logo" href="{{route('home')}}">
      <img src="{{secure_asset('img/logo-sair.svg')}}" alt="Logo do site">
    </a>
    <hr class="divisor">
    <ul uk-nav>
      @if(Route::has('login'))
        @auth
          <li class="@if(request()->is('perfil*')) active @endif">
            <a href="{{route('perfil.index')}}">
              <i class="material-icons-round">person</i>
              Perfil
            </a>
          </li>
          <li class="@if(request()->is('terreo*')) active @endif">
            <a href="{{route('terreo.index')}}">
              <i class="material-icons-round">domain</i>
              Térreo
            </a>
          </li>
          <li class="@if(request()->is('primeiroandar*')) active @endif">
            <a href="{{route('primeiroandar.index')}}">
              <i class="material-icons-round">domain</i>
              1º Andar
            </a>
          </li>
          <li class="@if(request()->is('segundoandar*')) active @endif">
            <a href="{{route('segundoandar.index')}}">
              <i class="material-icons-round">domain</i>
              2º Andar
            </a>
          </li>

          @if(Auth::user()->categoria === 'ADMINISTRADOR')
            <li class="@if(request()->is('usuario*')) active @endif">
              <a href="{{route('usuario.index')}}">
                <i class="material-icons-round">supervised_user_circle</i>
                Usuários
              </a>
            </li>
            <li class="@if(request()->is('solicitar*')) active @endif">
              <a href="{{route('solicitar.index')}}">
                <i class="material-icons-round">assignment</i>
                Solicitações
              </a>
            </li>
          @endif
          <li>
            <a href="#modal-sair" uk-toggle>
              <i class="material-icons-round">exit_to_app</i>
              Sair
            </a>
            @include('components.modal', 
            ['id' => 'modal-sair', 'texto' => 'Deseja realmente sair?', 'rota' => 'logout'])
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