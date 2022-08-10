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
		Schema::create('cours', function (Blueprint $table) {
			$table->id();
			$table->string('matiere')->unique();
			$table->date('date_cours');
			$table->time('heure_debut');
			$table->time('heure_fin');
			$table->unsignedBigInteger('id_classe');
			$table->unsignedBigInteger('id_enseignant');
			
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
		Schema::dropIfExists('cours');
	}
};
