@extends("layouts.app", ["paginaAtual" => "Usuários"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "usuarios"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-usuarios", "textoIntroducao" => "gerencie usuários", "paginaAtual" => "Usuários"])
  
  <section class="uk-section usuarios">
    <div class="uk-container">
      <div class="uk-margin-medium-bottom uk-child-width-expand@s" uk-grid>
        <form class="uk-search uk-search-default form-buscar" action="{{route('usuario.pesquisar')}}" method="post">
          @csrf
          <div class="uk-inline-block uk-width-1-3@s uk-margin-small-right">
            <input class="uk-search-input uk-border-rounded" type="search" placeholder="Procurar usuário" name="buscar">
          </div>
          <div class="uk-inline-block btn">
            <a class="uk-button uk-margin-small-right btn-confirmar" onclick="event.preventDefault();document.querySelector('.form-buscar').submit()">
              <i class="material-icons-round">search</i>
            </a>
            <a href="{{route('usuario.index')}}" class="uk-button uk-margin-right btn-cancelar">
              <i class="material-icons-round">clear_all</i>
            </a>
            <a href="{{route('usuarios.form')}}" class="uk-button btn-confirmar">{{__('Adicionar usuário')}}</a>
          </div>
        </form>
      </div>

      @include("components.tabela", ["pagina" => 'usuario'])
    </div>
  </section>
@endsection