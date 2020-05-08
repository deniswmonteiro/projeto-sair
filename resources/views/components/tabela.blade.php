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
              <form action="{{route($pagina.'.destroy', [$pagina => $usuario->id])}}" method="post" class="uk-display-inline-block form-btn-submit">
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