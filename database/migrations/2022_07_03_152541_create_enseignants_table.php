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
		Schema::create('enseignants', function (Blueprint $table) {
			$table->id();
			$table->string('nom_enseignant');
			$table->string('prenoms_enseignant');
			$table->string('sexe_enseignant')->default('Masculin');
			$table->bigInteger('tel_enseignant')->unique();
			$table->string('email_enseignant');
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
		Schema::dropIfExists('enseignants');
	}
};
