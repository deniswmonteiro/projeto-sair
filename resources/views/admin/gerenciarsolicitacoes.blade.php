@extends("layouts.app", ["paginaAtual" => "Gerenciar Solicitações"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "solicitacoes"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerenciar solicitações", "paginaAtual" => "Solicitações de Cadastro"])
  
  <section class="uk-section andar">
    <div class="uk-container">
      <div>
      </div>
      <div class="uk-margin-large-bottom">
        <form class="uk-search uk-search-default">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input" type="search" placeholder="Procurar usuário">
        </form>
        <a href="{{route('usuarios.index')}}" class="uk-button">{{__('Voltar')}}</a>
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
                  <div>
                    <a href="" class="uk-button uk-button-default uk-border-rounded btn-visualizar">{{__('Visualizar')}}</a>
                    <a href="" class="uk-button uk-button-default uk-border-rounded uk-margin-left btn-remover">{{__('Remover')}}</a>
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