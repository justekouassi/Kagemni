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
		Schema::create('etudiants', function (Blueprint $table) {
			$table->id();
			$table->string('nom_etudiant');
			$table->string('prenoms_etudiant');
			$table->string('sexe_etudiant')->default('Masculin');
			$table->bigInteger('tel_etudiant')->unique();
			$table->string('email_etudiant');
			$table->unsignedBigInteger('id_classe');
			$table->unsignedBigInteger('id_enseignant');
			// $table->unsignedBigInteger('id_cours')->index()->nullable();

			$table->foreign('id_classe')
				->references('id')
				->on('classes')
				->onDelete('cascade')
				->onUpdate('cascade');

			$table->foreign('id_enseignant')
				->references('id')
				->on('enseignants')
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
		Schema::dropIfExists('etudiants');
	}
};
