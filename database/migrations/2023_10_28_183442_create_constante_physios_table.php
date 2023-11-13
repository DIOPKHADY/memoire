<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstantePhysiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constante_physios', function (Blueprint $table) {
            $table->id();
            $table->string('glycemie');
            $table->string('temperaturecorporelle');
            $table->string('FrequenceCardiaque');
            $table->string('saturation');
            $table->string('frequenceRespiration');
            $table->string('pressionArterielle');
            $table->string('poidsKG');
            $table->string('tailleCm');
            $table->string('dateHeureConstantes');
            $table->foreignId('patient_id');

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
        Schema::dropIfExists('constante_physios');
    }
}
