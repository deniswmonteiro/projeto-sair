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
  @case("lampadas5")
    @for($i = 0; $i <= count($coord_circ_lampadas5) - 1; $i++)
      <i class="uk-position-absolute icones-lampada" style="left: {{$coord_circ_lampadas5[$i]}}%; top: {{$coord_circ_lampadas5[++$i]}}%" data-dispositivo="lampadas5">5</i>
    @endfor
    @break
  @case("lampadas6")
    @for($i = 0; $i <= count($coord_circ_lampadas6) - 1; $i++)
      <i class="uk-position-absolute icones-lampada" style="left: {{$coord_circ_lampadas6[$i]}}%; top: {{$coord_circ_lampadas6[++$i]}}%" data-dispositivo="lampadas6">6</i>
    @endfor
    @break
@endswitch