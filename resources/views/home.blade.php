@extends("layouts.app", ["paginaAtual" => "Home"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "home"])
  <section class="uk-section andares">
    <div class="uk-container">
      <h1>Andares</h1>
      <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
          <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-card-hover uk-text-center card-andar" data-andar="terreo">
            <h3 class="uk-card-title">Térreo</h3>
            <img src="{{asset('../img/bg-terreo.svg')}}" class="img-bg-andar" alt="Planta do Térreo">
            <div class="btn">
              <a href="{{route('terreo.index')}}" class="uk-button btn-acao">
                {{__('Mostrar salas')}}
              </a>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-card-hover uk-text-center card-andar" data-andar="primeiro">
            <h3 class="uk-card-title">1º Andar</h3>
            <img src="{{asset('../img/bg-primeiro-andar.svg')}}" class="img-bg-andar" alt="Planta do 1º Andar">
            <div class="btn">
              <a href="{{route('primeiroandar.index')}}" class="uk-button btn-acao">
                {{__('Mostrar salas')}}
              </a>
            </div>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-card-hover uk-text-center card-andar" data-andar="segundo">
            <h3 class="uk-card-title">2º Andar</h3>
            <img src="{{asset('../img/bg-segundo-andar.svg')}}" class="img-bg-andar" alt="Planta do 2º Andar">
            <div class="btn">
              <a href="{{route('segundoandar.index')}}" class="uk-button btn-acao">
                {{__('Mostrar salas')}}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection