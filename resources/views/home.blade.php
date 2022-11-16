@extends("layouts.app", ["paginaAtual" => "Home"])

@section("conteudo")
@include("layouts.menu", ["menu" => "home"])
<section class="uk-section andares">
  <div class="uk-container">
    <h1 class="titulo">Andaressssss</h1>
    <div class="uk-position-relative uk-visible-toggle" tabindex="-1"
      uk-slider="center: true">
      <ul class="uk-slider-items uk-grid uk-grid-match" uk-grid>
        <li class="uk-width-1-2@m">
          <div
            class="uk-card uk-card-default uk-card-body uk-border-rounded uk-card-hover uk-text-center uk-cover-container card-andar">
            <h3>Térreossssss</h3>
            <img src="{{secure_asset('img/bg-terreo.svg')}}"
              class="img-bg-andar" alt="Planta do Térreo">
            <div class="btn">
              <a href="{{route('terreo.index')}}" class="uk-button btn-acao">
                {{__('Mostrar salas')}}
              </a>
            </div>
          </div>
        </li>
        <li class="uk-width-1-2@m">
          <div
            class="uk-card uk-card-default uk-card-body uk-border-rounded uk-card-hover uk-text-center uk-cover-container card-andar">
            <h3>1º Andar</h3>
            <img src="{{secure_asset('img/bg-primeiro-andar.svg')}}"
              class="img-bg-andar" alt="Planta do 1º Andar">
            <div class="btn">
              <a href="{{route('primeiroandar.index')}}"
                class="uk-button btn-acao">
                {{__('Mostrar salas')}}
              </a>
            </div>
          </div>
        </li>
        <li class="uk-width-1-2@m">
          <div
            class="uk-card uk-card-default uk-card-body uk-border-rounded uk-card-hover uk-text-center uk-cover-container card-andar">
            <h3>2º Andar</h3>
            <img src="{{secure_asset('img/bg-segundo-andar.svg')}}"
              class="img-bg-andar" alt="Planta do 2º Andar">
            <div class="btn">
              <a href="{{route('segundoandar.index')}}"
                class="uk-button btn-acao">
                {{__('Mostrar salas')}}
              </a>
            </div>
          </div>
        </li>
      </ul>
      <a class="uk-position-center-left uk-position-small controle-slide"
        href="#" uk-slidenav-previous uk-slider-item="previous"></a>
      <a class="uk-position-center-right uk-position-small controle-slide"
        href="#" uk-slidenav-next uk-slider-item="next"></a>
      <a class="uk-position-center-left uk-position-small controle-slide"
        href="#" uk-slidenav-previous uk-slider-item="previous"></a>
      <a class="uk-position-center-right uk-position-small controle-slide"
        href="#" uk-slidenav-next uk-slider-item="next"></a>
    </div>
  </div>
</section>
@endsection