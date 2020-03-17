<?php

use Illuminate\Database\Seeder;

class SalasTerreoCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 1,
            'sala_nome' => 'Biblioteca',
            'sala_localizacao' => [38, 11],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 3,
            'coord_circ_lampadas' => [
                'lampadas1' => [10, 16, 46, 16, 82, 16, 10, 32, 46, 32, 82, 32,
                                10, 48, 46, 48, 82, 48, 10, 64, 46, 80],
                'lampadas2' => [28, 16, 46, 64, 64, 16, 28, 32, 64, 32,
                                28, 48, 64, 48, 28, 64, 28, 80],
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [1, 17],
                'arcondicionado2' => [1, 57],
                'arcondicionado3' => [95.5, 28]
            ],
            'estado_lampada' => [
                'c1' => 'off1',
                'c2' => 'off2'
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 2,
            'sala_nome' => 'Lab. de Instalações Elétricas',
            'sala_localizacao' => [61, 8],
            'qtd_circ_lampada' => 3,
            'qtd_arcondicionado' => 3,
            'coord_circ_lampadas' => [
                'lampadas1' => [15, 20, 15, 50, 80, 50, 15, 80, 80, 80],
                'lampadas2' => [48, 20, 48, 50, 48, 80],
                'lampadas3' => [80, 20]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [38, 5],
                'arcondicionado2' => [95, 67],
                'arcondicionado3' => [82, 5]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 3,
            'sala_nome' => 'Lab. de Concepção e Análise de Dispositivos Elétricos',
            'sala_localizacao' => [78, 10],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 1,
            'coord_circ_lampadas' => [
                'lampadas1' => [15, 20, 80, 20, 15, 50, 80, 50, 15, 80, 80, 80],
                'lampadas2' => [48, 20, 48, 50, 48, 80]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [15, 6]
            ]   
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 4,
            'sala_nome' => 'Lab. de Sistemas Motrizes',
            'sala_localizacao' => [93, 12],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 1,
            'coord_circ_lampadas' => [
                'lampadas1' => [15, 13, 80, 13, 15, 32, 80, 32, 15, 50, 80, 50, 15, 69, 80, 69],
                'lampadas2' => [48, 13, 48, 32, 48, 50, 48, 69]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [95, 40]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 5,
            'sala_nome' => 'Circulação',
            'sala_localizacao' => [65, 17.5],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [7, 30, 40, 30, 73, 30],
                'lampadas2' => [24, 30, 56, 30, 90, 30]
            ] 
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 6,
            'sala_nome' => 'Passarela',
            'sala_localizacao' => [47, 26],
            'qtd_circ_lampada' => 1,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [42, 31, 42, 71]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 7,
            'sala_nome' => 'Hall',
            'sala_localizacao' => [39, 42],
            'qtd_circ_lampada' => 4,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [25, 70, 45, 70],
                'lampadas2' => [25, 50, 45, 50, 25, 90, 45, 90],
                'lampadas3' => [8, 8, 45, 10, 81, 10, 8, 36, 45, 30, 81, 30],
                'lampadas4' => [25, 10, 63, 10, 25, 30, 63, 30]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 8,
            'sala_nome' => 'Banheiro Masculino',
            'sala_localizacao' => [24, 39],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [40, 25, 80, 70],
                'lampadas2' => [40, 70]
            ] 
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 9,
            'sala_nome' => 'Banheiro Feminino',
            'sala_localizacao' => [24, 44.5],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [40, 70, 80, 25],
                'lampadas2' => [40, 25],
            ] 
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 10,
            'sala_nome' => 'Banheiro PNE',
            'sala_localizacao' => [30, 42.5],
            'qtd_circ_lampada' => 1,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [49, 48]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 11,
            'sala_nome' => 'Copa',
            'sala_localizacao' => [23, 54],
            'qtd_circ_lampada' => 4,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [51, 23],
                'lampadas2' => [51, 56],
                'lampadas3' => [68, 74],
                'lampadas4' => [51, 89]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 12,
            'sala_nome' => 'Cafeteria',
            'sala_localizacao' => [29, 54],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [22, 26, 70, 73],
                'lampadas2' => [70, 26, 22, 73]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 13,
            'sala_nome' => 'Escada',
            'sala_localizacao' => [51, 41.5],
            'qtd_circ_lampada' => 1,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [92, 16, 92, 82]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 14,
            'sala_nome' => 'Diretoria',
            'sala_localizacao' => [45, 50],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 1,
            'coord_circ_lampadas' => [
                'lampadas1' => [24, 49],
                'lampadas2' => [72, 49]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [50, 93]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 15,
            'sala_nome' => 'Secretaria',
            'sala_localizacao' => [45, 56],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 1,
            'coord_circ_lampadas' => [
                'lampadas1' => [24, 49],
                'lampadas2' => [72, 49]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [50, 6]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 16,
            'sala_nome' => 'Recepção',
            'sala_localizacao' => [46, 62],
            'qtd_circ_lampada' => 1,
            'qtd_arcondicionado' => 1,
            'coord_circ_lampadas' => [
                'lampadas1' => [47, 49],
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [50, 92]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 17,
            'sala_nome' => 'Espaço Multiuso',
            'sala_localizacao' => [40, 75],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [26, 16, 62, 16, 26, 43, 62, 43, 26, 70, 62, 70],
                'lampadas2' => [44, 16, 80, 16, 9, 43, 44, 43, 80, 43,
                                9, 70, 43, 70, 80, 70]
            ]
        ]);
        
        \projetoautomacao\SalasTerreo::create([
            'id_sala' => 18,
            'sala_nome' => 'Auditório',
            'sala_localizacao' => [18, 80],
            'qtd_circ_lampada' => 4,
            'qtd_arcondicionado' => 5,
            'coord_circ_lampadas' => [
                'lampadas1' => [86, 29, 86, 40, 86, 52, 86, 63, 86, 74, 74, 17,
                                74, 29, 74, 40, 74, 52, 74, 63, 74, 74, 74, 85],
                'lampadas2' => [62, 17, 62, 29, 62, 40, 62, 52, 62, 63, 62, 74,
                                49, 29, 49, 40, 49, 52, 49, 63, 49, 74,],
                'lampadas3' => [27, 40, 27, 49, 27, 58],
                'lampadas4' => [36, 40, 36, 49, 36, 58],
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [57, 14],
                'arcondicionado2' => [29, 34],
                'arcondicionado3' => [7, 45],
                'arcondicionado4' => [28, 64],
                'arcondicionado5' => [54, 83]
            ]
        ]);
    }
}
