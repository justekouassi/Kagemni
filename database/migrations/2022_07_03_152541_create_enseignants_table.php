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
            $table->string('sexe_enseignant');
            $table->integer('tel_enseignant');
            $table->string('email_enseignant');
            $table->unsignedBigInteger('id_cours')->index()->nullable();
            $table->unsignedBigInteger('id_etudiant')->index()->nullable();
            $table->unsignedBigInteger('id_projet')->index()->nullable();

            $table->foreign('id_cours')
                ->references('id')
                ->on('cours')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_etudiant')
                ->references('id')
                ->on('etudiants')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_projet')
                ->references('id')
                ->on('projets')
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
        Schema::dropIfExists('enseignants');
    }
};
