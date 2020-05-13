<?php

use Illuminate\Database\Seeder;

class SalasSegundoAndarCollectionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 1,
			'sala_nome' => 'Oficina',
			'sala_localizacao' => [10, 20.5],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => 1,
			'coord_circ_lampadas' => [
				'lampadas1' => [24, 50],
				'lampadas2' => [72, 50]
			],
			'coord_arcondicionado' => [
				'arcondicionado1' => [93.5, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 2,
			'sala_nome' => 'Sala Prof. 1',
			'sala_localizacao' => [23, 14],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => 1,
			'coord_circ_lampadas' => [
				'lampadas1' => [45, 20, 45, 80],
				'lampadas2' => [45, 50]
			],
			'coord_arcondicionado' => [
				'arcondicionado1' => [88, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 3,
			'sala_nome' => 'Sala Prof. 2',
			'sala_localizacao' => [33, 14],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => 1,
			'coord_circ_lampadas' => [
				'lampadas1' => [45, 20, 45, 80],
				'lampadas2' => [45, 50]
			],
			'coord_arcondicionado' => [
				'arcondicionado1' => [2, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 4,
			'sala_nome' => 'Sala Prof. 3',
			'sala_localizacao' => [43, 14],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => 1,
			'coord_circ_lampadas' => [
				'lampadas1' => [45, 20, 45, 80],
				'lampadas2' => [45, 50]
			],
			'coord_arcondicionado' => [
				'arcondicionado1' => [88, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 5,
			'sala_nome' => 'Sala Prof. 4',
			'sala_localizacao' => [54, 14],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => 1,
			'coord_circ_lampadas' => [
				'lampadas1' => [45, 20, 45, 80],
				'lampadas2' => [45, 50]
			],
			'coord_arcondicionado' => [
				'arcondicionado1' => [2, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 6,
			'sala_nome' => 'Sala Prof. 5',
			'sala_localizacao' => [64, 14],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => 1,
			'coord_circ_lampadas' => [
				'lampadas1' => [45, 20, 45, 80],
				'lampadas2' => [45, 50]
			],
			'coord_arcondicionado' => [
				'arcondicionado1' => [88, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 7,
			'sala_nome' => 'Sala Prof. 6',
			'sala_localizacao' => [74, 14],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => null,
			'coord_circ_lampadas' => [
				'lampadas1' => [45, 20, 45, 80],
				'lampadas2' => [45, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 8,
			'sala_nome' => 'Lab. de Aferição',
			'sala_localizacao' => [90, 14],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => 1,
			'coord_circ_lampadas' => [
				'lampadas1' => [23, 20, 23, 50, 23, 80],
				'lampadas2' => [72, 20, 72, 50, 72, 80]
			],
			'coord_arcondicionado' => [
				'arcondicionado1' => [93, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 9,
			'sala_nome' => 'Circulação',
			'sala_localizacao' => [28, 52],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => null,
			'coord_circ_lampadas' => [
				'lampadas1' => [8, 4, 40, 4, 72, 4, 10, 77],
				'lampadas2' => [24, 4, 56, 4, 89, 4, 10, 42]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 10,
			'sala_nome' => 'Hall',
			'sala_localizacao' => [22.5, 86],
			'qtd_circ_lampada' => 2,
			'qtd_arcondicionado' => null,
			'coord_circ_lampadas' => [
				'lampadas1' => [7, 86, 39, 76, 68, 76],
				'lampadas2' => [7, 10, 39, 19, 68, 19]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 11,
			'sala_nome' => 'Banheiro Masculino',
			'sala_localizacao' => [5, 78],
			'qtd_circ_lampada' => 1,
			'qtd_arcondicionado' => null,
			'coord_circ_lampadas' => [
				'lampadas1' => [22, 25, 67, 25]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 12,
			'sala_nome' => 'Banheiro Feminino',
			'sala_localizacao' => [5, 94],
			'qtd_circ_lampada' => 1,
			'qtd_arcondicionado' => null,
			'coord_circ_lampadas' => [
				'lampadas1' => [21, 70, 63, 70]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 13,
			'sala_nome' => 'Banheiro PNE',
			'sala_localizacao' => [11, 86],
			'qtd_circ_lampada' => 1,
			'qtd_arcondicionado' => null,
			'coord_circ_lampadas' => [
				'lampadas1' => [47, 50]
			]
		]);

		\projetoautomacao\SalasSegundoAndar::create([
			'id_sala' => 14,
			'sala_nome' => 'Escada',
			'sala_localizacao' => [35, 86.5],
			'qtd_circ_lampada' => 1,
			'qtd_arcondicionado' => null,
			'coord_circ_lampadas' => [
				'lampadas1' => [91, 18, 91, 82]
			]
		]);
	}
}
