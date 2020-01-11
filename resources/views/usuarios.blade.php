@extends("layouts.app", ["paginaAtual" => "Usuários"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "usuarios"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerenciar usuários", "paginaAtual" => "Usuários"])
  
  <section class="uk-section andar">
    <div class="uk-container">
      <div>
        
      </div>
      <div class="uk-margin-large-bottom">
        <form class="uk-search uk-search-default">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input" type="search" placeholder="Procurar usuário">
        </form>
        <a href="{{route('usuarios.form')}}" class="uk-button">Adicionar usuário</a>
        <a href="" class="uk-button">Solicitações pendentes</a>
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
            <tr>
              <td>Admin</td>
              <td>admin@admin</td>
              <td>administrador</td>
              <td>LCAD</td>
              <td>
                <div>
                  <a href="" class="uk-button uk-button-default uk-border-rounded btn-atualizar">Atualizar</a>
                  <a href="" class="uk-button uk-button-default uk-border-rounded uk-margin-left btn-remover">Remover</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>Denis William Matos Monteiro</td>
              <td>deniswmonteiro@gmail.com</td>
              <td>denism</td>
              <td>LabMotriz</td>
              <td>
                <div>
                  <a href="" class="uk-button uk-button-default uk-border-rounded btn-atualizar">Atualizar</a>
                  <a href="" class="uk-button uk-button-default uk-border-rounded uk-margin-left btn-remover">Remover</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection