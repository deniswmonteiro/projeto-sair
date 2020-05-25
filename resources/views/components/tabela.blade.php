<div class="uk-overflow-auto">
  <table class="uk-table uk-table-hover uk-table-responsive uk-table-middle uk-table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        @if($pagina === "usuario")
          <th>Categoria</th>
        @endif
        <th>Laboratório</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
      <tr>
        <td>{{$usuario->nome}}</td>
        <td>{{$usuario->email}}</td>
        @if($pagina === "usuario")
          <td>{{$usuario->categoria}}</td>
        @endif
        <td>{{$usuario->laboratorio}}</td>
        <td>
          <div class="uk-flex-button btn">
            <a href="{{route($pagina.'.editar', ['slug' => $usuario->slug])}}" class="uk-button uk-margin-right btn-acao">
              <i class="material-icons-round">edit</i>
            </a>
            <a class="uk-button btn-cancelar" type="button">
              <i class="material-icons-round">delete</i>
            </a>
            <div uk-drop="mode: click; pos: top-center">
              <div class="uk-card uk-card-body uk-card-default uk-card-small uk-border-rounded bg-card-form">
                <p>Confimar exclusão?</p>
                <form action="{{route($pagina.'.destroy', [$pagina => encrypt($usuario->id)])}}" method="post" class="uk-display-inline-block form-btn-submit form-excluir">
                  @csrf
                  @method("delete")
                  <button type="submit" class="uk-button btn-confirmar">
                    Sim
                  </a>
                </form>
              </div>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>