@extends("layouts.app", ["paginaAtual" => "Solicitações de Cadastro"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "gerenciar-solicitacoes"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerencie solicitações", "paginaAtual" => "Solicitação de Cadastro"])
  
  <section class="uk-section solicitacao">
    <div class="uk-container">
      <div>
        @if($usuarios == '[]')
          <h2>Não há solicitação de cadastro!</h2>
        @else
          @include("components.tabela", ["pagina" => 'solicitar'])
        @endif
    </div>
  </section>
@endsection