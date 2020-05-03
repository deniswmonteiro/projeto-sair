@extends("layouts.app", ["paginaAtual" => $sala_nome])

@section("conteudo")
  @include("layouts.menu", ["menu" => "salas"])
  @include("layouts.introducao")
  
  <section class="uk-section uk-section-xsmall uk-margin-medium-bottom salas" data-group>
    <div class="uk-container">
      <div>
        <a href="{{route($andar.'.index')}}" class="btn-cancelar link-voltar">
          <i class="material-icons-round">arrow_back</i>
        </a>
      </div>
      <div class="uk-child-width-expand@m" uk-grid>
        <h1 class="uk-width-1-1 sala-nome">{{$sala_nome}}</h1>
        <div class="img-sala">
          @if(is_null($qtd_arcondicionado))
            <h3 class="aviso-arcondicionado img-arcondicionado">Não possui ar-condicionado</h3>
          @endif
          @yield('salas')
        </div>
        <div class="uk-width-1-3@l interruptor">
          <ul class="uk-subnav uk-subnav-pill tab-menu" uk-switcher="animation: uk-animation-fade">
            <li><a href="#" data-click="lampada">Lâmpadas</a></li>
            <li><a href="#" data-click="arcondicionado">Ar-condicionado</a></li>
          </ul>
          <ul class="uk-switcher uk-margin">
            <li>
              @for($i = 1; $i <= $qtd_circ_lampada; $i++)
                <h5>Lâmpadas {{$i}}</h5>
                <label class="switch" for="lampadas{{$i}}">
                  <input type="checkbox" id="lampadas{{$i}}" class="check interruptor-lampada">
                  <div class="switch-slider switch-on-off lampadas{{$i}}"></div>
                </label>
              @endfor
            </li>
            <li>
              @for($i = 1; $i <= $qtd_arcondicionado; $i++)
                <h5>Ar-condicionado {{$i}}</h5>               
                <label class="switch" for="arcondicionado{{$i}}">
                  <input type="checkbox" id="arcondicionado{{$i}}" class="check interruptor-arcondicionado">
                  <div class="switch-slider switch-on-off"></div>
                </label>
              @endfor
            </li>
          </ul>  
        </div>
      </div>
    </div>
  </section>

  <script src="{{secure_asset('js/ws-conn.js')}}"></script>
@endsection