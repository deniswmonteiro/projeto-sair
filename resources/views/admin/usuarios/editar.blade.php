@extends("layouts.app", ["paginaAtual" => "Atualizar Dados"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "atualizarDados"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "atualize os dados", "paginaAtual" => "Usuários"])

  <section class="uk-section">
    <div class="uk-container">
      <form action="{{route('usuarios.update', ["usuario" => $usuarios->id])}}" method="post" class="form">
        @csrf
        @method("put")
        <div class="form-group">
          <label for="">Nome</label>
          <input type="text" name="nome" class="form-control" value="{{$usuarios->nome}}">
        </div>
        <div class="form-group">
          <label for="">CPF</label>
          <input type="text" name="cpf" class="form-control" value="{{$usuarios->cpf}}">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control" value="{{$usuarios->email}}">
        </div>
        <div class="form-group">
          <label for="">Laboratório</label>
          <select name="laboratorio" value="{{$usuarios->laboratorio}}">
            <option value="" disabled>Escolha uma opção</option>
            <option value="LabMotriz">LabMotriz</option>
            <option value="LCAD">LCAD</option>
            <option value="LabQuali">LabQuali</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Usuário</label>
          <input type="text" name="usuario" class="form-control" value="{{$usuarios->usuario}}">
        </div>
        <div>
          <a href="{{route('usuarios.index')}}" class="uk-button uk-border-rounded btn-cancelar">
							{{__('Cancelar')}}
						</a>
						<a href="" class="uk-button uk-border-rounded btn-atualizar">{{__('Atualizar')}}</a>
        </div>
      </form>
    </div>
  </section>

  <script src="{{asset('/js/atualizar.js')}}"></script>
@endsection