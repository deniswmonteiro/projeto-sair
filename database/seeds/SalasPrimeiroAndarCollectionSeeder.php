<?php

use Illuminate\Database\Seeder;

class SalasPrimeiroAndarCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 1,
            'sala_nome' => 'Lab. SIMA',
            'sala_localizacao' => [17, 10],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 1,
            'coord_circ_lampadas' => [
                'lampadas1' => [15, 15, 45, 15, 75, 15, 15, 61, 45, 61, 75, 61],
                'lampadas2' => [15, 38, 45, 38, 75, 38, 15, 84, 45, 84, 75, 84]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [93, 45]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 2,
            'sala_nome' => 'Lab. de Modelagem',
            'sala_localizacao' => [40, 8],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 2,
            'coord_circ_lampadas' => [
                'lampadas1' => [10, 20, 60, 20, 10, 50, 60, 50, 10, 80, 60, 80],
                'lampadas2' => [35, 20, 85, 20, 35, 50, 85, 50, 35, 80, 85, 80]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [1, 45],
                'arcondicionado2' => [93.5, 45]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 3,
            'sala_nome' => 'Lab. de Qualidade de Energia',
            'sala_localizacao' => [69, 8],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 2,
            'coord_circ_lampadas' => [
                'lampadas1' => [10, 20, 60, 20, 10, 50, 60, 50, 10, 80, 60, 80],
                'lampadas2' => [35, 20, 85, 20, 35, 50, 85, 50, 35, 80, 85, 80]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [1, 45],
                'arcondicionado2' => [93.5, 45]
            ]  
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 4,
            'sala_nome' => 'Lab. de Sistemas Motrizes',
            'sala_localizacao' => [91, 11],
            'qtd_circ_lampada' => 3,
            'qtd_arcondicionado' => 2,
            'coord_circ_lampadas' => [
                'lampadas1' => [51, 12, 84, 12, 19, 50, 51, 50],
                'lampadas2' => [52, 31, 84, 39, 19, 69, 51, 69, 84, 69],
                'lampadas3' => [19, 18],
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [93, 40],
                'arcondicionado2' => [1, 20]
            ]  
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 5,
            'sala_nome' => 'Circulação',
            'sala_localizacao' => [33.5, 27],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [10, 78, 7, 4, 40, 4, 73, 4],
                'lampadas2' => [10, 42, 24, 4, 56, 4, 90, 4]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 6,
            'sala_nome' => 'Hall',
            'sala_localizacao' => [23, 47],
            'qtd_circ_lampada' => 4,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [27, 73, 27, 41],
                'lampadas2' => [27, 90, 27, 57],
                'lampadas3' => [7, 5, 25, 7, 42, 7, 61, 7, 78, 7],
                'lampadas4' => [7, 28, 25, 26 , 42, 26, 61, 26, 78, 26]
            ] 
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 7,
            'sala_nome' => 'Banheiro Masculino',
            'sala_localizacao' => [5, 44],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [47, 27, 85, 73],
                'lampadas2' => [47, 73]
            ] 
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 8,
            'sala_nome' => 'Banheiro Feminino',
            'sala_localizacao' => [5, 51],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [50, 72, 85, 25],
                'lampadas2' => [50, 25]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 9,
            'sala_nome' => 'Banheiro PNE',
            'sala_localizacao' => [12, 48.5],
            'qtd_circ_lampada' => 1,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [49, 52]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 10,
            'sala_nome' => 'Escada',
            'sala_localizacao' => [38.5, 47.5],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => null,
            'coord_circ_lampadas' => [
                'lampadas1' => [91, 82],
                'lampadas2' => [91, 16]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 11,
            'sala_nome' => 'Sala de Reunião',
            'sala_localizacao' => [28.5, 58.5],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 1,
            'coord_circ_lampadas' => [
                'lampadas1' => [18, 51, 79, 51],
                'lampadas2' => [48, 51]      
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [50, 87]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 12,
            'sala_nome' => 'Sala de Aula 1',
            'sala_localizacao' => [28.5, 72],
            'qtd_circ_lampada' => 3,
            'qtd_arcondicionado' => 2,
            'coord_circ_lampadas' => [
                'lampadas1' => [21, 19, 49, 19, 77, 19],
                'lampadas2' => [21, 51, 49, 51, 77, 51],
                'lampadas3' => [21, 84, 49, 84, 77, 84]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [50, 1],
                'arcondicionado2' => [50, 94]
            ]
        ]);
        
        \projetoautomacao\SalasPrimeiroAndar::create([
            'id_sala' => 13,
            'sala_nome' => 'Sala de Aula 2',
            'sala_localizacao' => [24.5, 92],
            'qtd_circ_lampada' => 2,
            'qtd_arcondicionado' => 2,
            'coord_circ_lampadas' => [
                'lampadas1' => [13, 28, 36, 28, 59, 28, 82, 28],
                'lampadas2' => [13, 69, 36, 69, 59, 69, 82, 69]
            ],
            'coord_arcondicionado' => [
                'arcondicionado1' => [30, 90],
                'arcondicionado2' => [70, 90]
            ]
        ]);
    }
}
