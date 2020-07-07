@extends("layouts.app", ["paginaAtual" => $sala_nome])

@section("conteudo")
  @include("layouts.menu", ["menu" => "salas"])
  @include("layouts.introducao")
  
  <section class="uk-section uk-section-xsmall uk-margin-medium-bottom salas" data-group>
    <div class="uk-container">
      {{-- <form class="uk-form-stacked form-usuario-editar" action="{{route('perfil.update', ["perfil" => encrypt($usuarioLogado->id)])}}" method="post">
        @csrf
        @method("put")
      </form> --}}
    </div>
  </section>
@endsection