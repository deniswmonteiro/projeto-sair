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
      
      @include("components.tabela", ["pagina" => 'solicitar'])
    </div>
  </section>
@endsection