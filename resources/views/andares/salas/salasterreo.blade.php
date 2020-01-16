@extends("layouts.salas", ["iconeIntroducao" => "ico-local", "textoIntroducao" => "térreo", "paginaAtual" => "Salas"])

@section("salas")
  @switch($sala_id)
    @case(1)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "biblioteca", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break;
    @case(2)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "lab-instalacoes-eletricas", "qtd_imgs" =>2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(3)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "lcad", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(4)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "lab-sistemas-motrizes", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(5)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "circulacao", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(6)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "passarela", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
    @break
      @case(7)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "hall", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(8)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "banheiro-masculino", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(9)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "banheiro-feminino", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(10)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "banheiro-pne", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(11)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "copa", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(12)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "cafeteria", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(13)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "escada", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(14)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "diretoria", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(15)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "secretaria", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(16)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "recepcao", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(17)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "espaco-multiuso", "qtd_imgs" => 1, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @case(18)
      <div>
        <div class="uk-inline">
          @include("layouts.addcord", [
            "andar" => "terreo", "local" => "auditorio", "qtd_imgs" => 2, "qtd_lampadas" => $qtd_circ_lampada, "qtd_arcondicionados" => $qtd_arcondicionado
          ])
        </div>
      </div>
      @break
    @default
      <h3>Erro! Sala não encontrada.</h3>
  @endswitch
@endsection