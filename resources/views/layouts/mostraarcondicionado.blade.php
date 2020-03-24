@switch($arcondicionado)
  @case("arcondicionado1")
    $coord_arcondicionado1 = count($coord_arcondicionado1)
    @for($i = 0; $i <=  $coord_arcondicionado1 - 1; $i++)
      <i class="uk-position-absolute icones-arcondicionado" style="left: {{$coord_arcondicionado1[$i]}}%; top: {{$coord_arcondicionado1[++$i]}}%" data-dispositivo="arcondicionado1">1</i>
    @endfor
    @break
  @case("arcondicionado2")
    @for($i = 0; $i <= count($coord_arcondicionado2) - 1; $i++)
      <i class="uk-position-absolute icones-arcondicionado" style="left: {{$coord_arcondicionado2[$i]}}%; top: {{$coord_arcondicionado2[++$i]}}%" data-dispositivo="arcondicionado2">2</i>
    @endfor
    @break
  @case("arcondicionado3")
    @for($i = 0; $i <= count($coord_arcondicionado3) - 1; $i++)
      <i class="uk-position-absolute icones-arcondicionado" style="left: {{$coord_arcondicionado3[$i]}}%; top: {{$coord_arcondicionado3[++$i]}}%" data-dispositivo="arcondicionado3">3</i>
    @endfor
    @break
  @case("arcondicionado4")
    @for($i = 0; $i <= count($coord_arcondicionado4) - 1; $i++)
      <i class="uk-position-absolute icones-arcondicionado" style="left: {{$coord_arcondicionado4[$i]}}%; top: {{$coord_arcondicionado4[++$i]}}%" data-dispositivo="arcondicionado4">4</i>
    @endfor
    @break
  @case("arcondicionado5")
    @for($i = 0; $i <= count($coord_arcondicionado5) - 1; $i++)
      <i class="uk-position-absolute icones-arcondicionado" style="left: {{$coord_arcondicionado5[$i]}}%; top: {{$coord_arcondicionado5[++$i]}}%" data-dispositivo="arcondicionado5">5</i>
    @endfor
    @break
@endswitch