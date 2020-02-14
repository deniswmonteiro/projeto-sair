@extends("layouts.app", ["paginaAtual" => "Usuários"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "usuarios"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerencie usuários", "paginaAtual" => "Usuários"])
  
  <section class="uk-section usuarios">
    <div class="uk-container">
      <div class="uk-margin-medium-bottom">
        <form class="uk-search uk-search-default uk-margin-medium-right form uk-width-medium">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input uk-border-rounded" type="search" placeholder="Procurar usuário">
        </form>
        <div class="uk-display-inline-block btn btn-usuarios-acao">
          <a href="{{route('usuarios.form')}}" class="uk-button uk-margin-right btn-acao">{{__('Adicionar usuário')}}</a>
        </div>
      </div>
      <div class="uk-overflow-auto">
        <table class="uk-table uk-table-hover uk-table-responsive uk-table-middle uk-table-striped">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Categoria</th>
              <th>Laboratório</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($usuarios as $usuario)
            <tr>
              <td>{{$usuario->nome}}</td>
              <td>{{$usuario->email}}</td>
              <td>{{$usuario->categoria}}</td>
              <td>{{$usuario->laboratorio}}</td>
              <td>
                <div class="uk-flex-button btn">
                  <a href="{{route('usuarios.editar', ['usuario' => $usuario->id])}}" class="uk-button uk-margin-right btn-acao">
                    <i class="material-icons-round">update</i>
                  </a>
                  <form action="{{route('usuarios.destroy', ['usuario' => $usuario->id])}}" method="post" class="uk-display-inline-block form-btn-submit">
                    @csrf
                    @method("delete")
                    <button type="submit" class="uk-button uk-width-1-1 btn-cancelar">
                      <i class="material-icons-round">delete</i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection