<?php

namespace projetoautomacao\Traits;

trait LocalTrait
{
  private function dadosLocal($salas, $sala_id)
  {
    $dados = [
      'sala_id' => $sala_id,
      'sala_nome' => $salas[--$sala_id]->sala_nome,
      'qtd_circ_lampada' => $salas[$sala_id]->qtd_circ_lampada,
      'qtd_arcondicionado' => $salas[$sala_id]->qtd_arcondicionado,
      'coord_circ_lampadas1' => collect($salas[$sala_id]->coord_circ_lampadas)->get('lampadas1'),
      'coord_circ_lampadas2' => collect($salas[$sala_id]->coord_circ_lampadas)->get('lampadas2'),
      'coord_circ_lampadas3' => collect($salas[$sala_id]->coord_circ_lampadas)->get('lampadas3'),
      'coord_circ_lampadas4' => collect($salas[$sala_id]->coord_circ_lampadas)->get('lampadas4'),
      'coord_arcondicionado1' => collect($salas[$sala_id]->coord_arcondicionado)->get('arcondicionado1'),
      'coord_arcondicionado2' => collect($salas[$sala_id]->coord_arcondicionado)->get('arcondicionado2'),
      'coord_arcondicionado3' => collect($salas[$sala_id]->coord_arcondicionado)->get('arcondicionado3'),
      'coord_arcondicionado4' => collect($salas[$sala_id]->coord_arcondicionado)->get('arcondicionado4'),
      'coord_arcondicionado5' => collect($salas[$sala_id]->coord_arcondicionado)->get('arcondicionado5')
    ];

    return $dados;
  }
}
