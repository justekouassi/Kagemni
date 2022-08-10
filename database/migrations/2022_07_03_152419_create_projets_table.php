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
		Schema::create('projets', function (Blueprint $table) {
			$table->id();
			$table->string('libelle_projet')->unique();
			$table->date('debut_projet');
			$table->date('fin_projet');
			$table->unsignedBigInteger('id_enseignant');
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
		Schema::dropIfExists('projets');
	}
};
