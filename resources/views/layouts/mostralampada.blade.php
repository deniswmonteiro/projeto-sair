@switch($lampadas)
  @case("lampadas1")
    @for($i = 0; $i <= count($coord_circ_lampadas1) - 1; $i++)
      <i class="uk-position-absolute icones-lampada" style="left: {{$coord_circ_lampadas1[$i]}}%; top: {{$coord_circ_lampadas1[++$i]}}%" data-dispositivo="lampadas1">1</i>
    @endfor
    @break
  @case("lampadas2")
    @for($i = 0; $i <= count($coord_circ_lampadas2) - 1; $i++)
      <i class="uk-position-absolute icones-lampada" style="left: {{$coord_circ_lampadas2[$i]}}%; top: {{$coord_circ_lampadas2[++$i]}}%" data-dispositivo="lampadas2">2</i>
    @endfor
    @break
  @case("lampadas3")
    @for($i = 0; $i <= count($coord_circ_lampadas3) - 1; $i++)
      <i class="uk-position-absolute icones-lampada" style="left: {{$coord_circ_lampadas3[$i]}}%; top: {{$coord_circ_lampadas3[++$i]}}%" data-dispositivo="lampadas3">3</i>
    @endfor
    @break
  @case("lampadas4")
    @for($i = 0; $i <= count($coord_circ_lampadas4) - 1; $i++)
      <i class="uk-position-absolute icones-lampada" style="left: {{$coord_circ_lampadas4[$i]}}%; top: {{$coord_circ_lampadas4[++$i]}}%" data-dispositivo="lampadas4">4</i>
    @endfor
    @break
@endswitch