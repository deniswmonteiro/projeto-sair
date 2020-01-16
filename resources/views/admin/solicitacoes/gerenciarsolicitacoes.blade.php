@extends("layouts.app", ["paginaAtual" => "Gerenciar Solicitações"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "gerenciar-solicitacoes"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerencie solicitações de cadastro", "paginaAtual" => "Solicitação de Cadastro"])
  
  <section class="uk-section andar">
    <div class="uk-container">
      <div>
      </div>
      <div class="uk-margin-large-bottom">
        <form class="uk-search uk-search-default uk-width-medium uk-margin-medium-right form">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input" type="search" placeholder="Procurar usuário">
        </form>
        <div class="uk-display-inline-block btn">
          <a href="{{route('usuarios.index')}}" class="uk-button btn-cancelar">{{__('Voltar')}}</a>
        </div>
      </div>
      <div class="uk-overflow-auto">
        <table class="uk-table uk-table-hover uk-table-responsive uk-table-middle uk-table-striped">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Usuário</th>
              <th>Laboratório</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($solicitacoes as $solicitacao)
              <tr>
                <td>{{$solicitacao->nome}}</td>
                <td>{{$solicitacao->email}}</td>
                <td>{{$solicitacao->usuario}}</td>
                <td>{{$solicitacao->laboratorio}}</td>
                <td>
                  <div class="btn">
                    <a href="{{route('gerenciarsolicitacoes.visualizar', ['gerenciarsolicitacao' => $solicitacao->id])}}" class="uk-button btn-acao">{{__('Visualizar')}}</a>
                    <form action="{{route('gerenciarsolicitacoes.destroy', ['gerenciarsolicitaco' => $solicitacao->id])}}" method="post" class="uk-display-inline-block">
                      @csrf
                      @method("delete")
                      <button type="submit" class="uk-button uk-margin-left btn-cancelar">{{__('Remover')}}</button>
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