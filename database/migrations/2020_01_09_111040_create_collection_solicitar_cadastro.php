<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionSolicitarCadastro extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('solicitar_cadastro', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->string('nome')->unique();
			$table->string('cpf')->unique();
			$table->string('email')->unique();
			$table->string('usuario')->unique();
			$table->string('laboratorio');
			$table->string('slug');

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
		Schema::dropIfExists('solicitar_cadastro');
	}
}
