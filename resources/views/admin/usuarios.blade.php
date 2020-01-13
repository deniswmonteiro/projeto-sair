@extends("layouts.app", ["paginaAtual" => "Usuários"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "usuarios"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerenciar usuários", "paginaAtual" => "Usuários"])
  
  <section class="uk-section andar">
    <div class="uk-container">
      <div class="uk-margin-large-bottom">
        <form class="uk-search uk-search-default">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input" type="search" placeholder="Procurar usuário">
        </form>
        <a href="{{route('usuarios.form')}}" class="uk-button">{{__('Adicionar usuário')}}</a>
        <a href="{{route('gerenciarsolicitacoes.index')}}" class="uk-button">{{__('Solicitações pendentes')}}</a>
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
                <div>
                  <a href="{{route('usuarios.editar', ['usuario' => $usuario->id])}}" class="uk-button uk-button-default uk-border-rounded btn-atualizar">
                    {{__('Atualizar')}}
                  </a>
                  <form action="{{route('usuarios.destroy', ['usuario' => $usuario->id])}}" method="post">
                    @csrf
                    @method("delete")
                    <button type="submit" class="uk-button uk-button-default uk-border-rounded uk-margin-left btn-remover">{{__('Remover')}}</button>
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