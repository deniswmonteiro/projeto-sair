@extends("layouts.salas", ["iconeIntroducao" => "ico-local", "textoIntroducao" => "2º Andar", "paginaAtual" => "Salas"])

@section("salas")
  @switch($sala_id)
    @case(1)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "oficina", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break;
    @case(2)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "sala-prof-1", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(3)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "sala-prof-2", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(4)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "sala-prof-3", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(5)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "sala-prof-4", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(6)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "sala-prof-5", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
    @break
      @case(7)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "sala-prof-6", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(8)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "lab-afericao", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(9)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "circulacao", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(10)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "hall", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(11)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "banheiro-masculino", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(12)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "banheiro-feminino", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(13)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "banheiro-pne", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(14)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "segundo_andar", "local" => "escada", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @default
      <h3>Erro! Sala não encontrada.</h3>
  @endswitch
@endsection