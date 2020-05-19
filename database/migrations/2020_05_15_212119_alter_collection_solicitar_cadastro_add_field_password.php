<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCollectionSolicitarCadastroAddFieldPassword extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('solicitar_cadastro', function (Blueprint $table) {
			$table->string('password')->after('usuario');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('solicitar_cadastro', function (Blueprint $table) {
			Schema::dropColumn('password');
		});
	}
}
