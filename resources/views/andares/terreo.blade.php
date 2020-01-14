@extends("layouts.app", ["paginaAtual" => "Térreo"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "terreo"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-local", "textoIntroducao" => "térreo", "paginaAtual" => "Salas"])
  
  <section class="uk-section andar">
    <div class="uk-container">
      <div class="btn">
        <a href="{{route('home')}}" class="btn-cancelar link-voltar">
          <i class="material-icons-round">arrow_back</i>
        </a>
      </div>
      <div class="uk-text-center">
        <div class="uk-inline">
          <img src="{{asset('/img/terreo.svg')}}">
          @foreach($salas as $sala)
            <a class="uk-position-absolute uk-transform-center" style="left: {{$sala->sala_localizacao[0]}}%; top: {{$sala->sala_localizacao[1]}}%" href="{{route('terreo.show', ['terreo'=>$sala->id_sala])}}">
              <span class="uk-badge bg-badge" uk-tooltip="{{$sala->sala_nome}}">{{$sala->id_sala}}</span>
            </a>
          @endforeach
        </div>
      </div>
      <h3>Legenda</h3>
      <ul class="uk-list legenda">
        @foreach($salas as $sala)
          <li>
            <a href="{{route('terreo.show', ['terreo'=>$sala->id_sala])}}">
              <span class="uk-badge bg-badge">{{$sala->id_sala}}</span>
              {{$sala->sala_nome}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </section>
@endsection