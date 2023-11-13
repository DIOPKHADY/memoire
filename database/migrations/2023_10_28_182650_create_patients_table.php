<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('dossierMedical');
            $table->string('genre');
            $table->string('dateNaissance');
            $table->string('NumeroCNI');
            $table->string('situationMatrimoniale');
            $table->string('Profession');
            $table->string('Nationalite');
            $table->foreignId('consultation_id');
            $table->foreignId('Antecedent_id');
            $table->foreignId('rv_id');
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
        Schema::dropIfExists('patients');
    }
}
