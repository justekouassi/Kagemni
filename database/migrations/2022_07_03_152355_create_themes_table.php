<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::disableForeignKeyConstraints();
		Schema::create('themes', function (Blueprint $table) {
			$table->id();
			$table->string('libelle_theme')->unique();
			$table->unsignedBigInteger('id_etudiant');
			$table->foreign('id_etudiant')
				->references('id')
				->on('etudiants')
				->onDelete('cascade')
				->onUpdate('cascade');
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
		Schema::dropIfExists('themes');
	}
};
