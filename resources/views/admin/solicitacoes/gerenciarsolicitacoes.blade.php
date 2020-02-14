@extends("layouts.app", ["paginaAtual" => "Solicitações de Cadastro"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "gerenciar-solicitacoes"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerencie solicitações", "paginaAtual" => "Solicitação de Cadastro"])
  
  <section class="uk-section solicitacao">
    <div class="uk-container">
      <div class="uk-margin-medium-bottom">
        <form class="uk-search uk-search-default uk-width-medium uk-margin-medium-right form">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input uk-border-rounded" type="search" placeholder="Procurar usuário">
        </form>
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
                  <div class="uk-flex-button btn">
                    <a href="{{route('gerenciarsolicitacoes.visualizar', ['gerenciarsolicitacao' => $solicitacao->id])}}" class="uk-button uk-margin-right btn-acao">
                      <i class="material-icons-round">edit</i>
                    </a>
                    <form action="{{route('gerenciarsolicitacoes.destroy', ['gerenciarsolicitaco' => $solicitacao->id])}}" method="post" class="uk-display-inline-block form-btn-submit">
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