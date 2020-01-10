@extends("layouts.app", ["paginaAtual" => "Usuários"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "usuarios"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-local", "textoIntroducao" => "gerenciamento de usuários", "paginaAtual" => "Usuários"])
  
  <section class="uk-section andar">
    <div class="uk-container">
      <div class="uk-margin-large-bottom">
        <form class="uk-search uk-search-default">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input" type="search" placeholder="Procurar usuário">
        </form>
        <a href="{{route('register')}}" class="uk-button">Adicionar usuário</a>
        <a href="" class="uk-button">Solicitações pendentes</a>
      </div>
      <div class="uk-overflow-auto">
        <table class="uk-table uk-table-hover uk-table-divider uk-table-responsive">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Laboratório</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Data1</td>
              <td>Table Data</td>
              <td>Table Data</td>
              <td>
                <a href="" class="uk-button uk-border-rounded btn-atualizar">Atualizar</a>
                <a href="" class="uk-button uk-border-rounded btn-remover">Remover</a>
              </td>
            </tr>
            <tr>
              <td>Data2</td>
              <td>Table Data</td>
              <td>Table Data</td>
              <td>
                <a href="" class="uk-button uk-border-rounded btn-atualizar">Atualizar</a>
                <a href="" class="uk-button uk-border-rounded btn-remover">Remover</a>
              </td>
            </tr>
            <tr>
              <td>Data3</td>
              <td>Table Data</td>
              <td>Table Data</td>
              <td>
                <a href="" class="uk-button uk-border-rounded btn-atualizar">Atualizar</a>
                <a href="" class="uk-button uk-border-rounded btn-remover">Remover</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection