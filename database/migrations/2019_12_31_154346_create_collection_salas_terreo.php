<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionSalasTerreo extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salas_terreo', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->integer('id_sala');
			$table->string('sala_nome');
			$table->bjson('sala_localizacao');
			$table->integer('qtd_circ_lampada');
			$table->integer('qtd_arcondicionado')->nullable();
			$table->bjson('coord_circ_lampadas');
			$table->bjson('coord_arcondicionado')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('salas_terreo');
	}
}
