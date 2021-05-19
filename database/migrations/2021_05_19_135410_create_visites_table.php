<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {
            $table->id();
            $table->integer('matricule')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('sex')->nullable();
            $table->string('cin')->nullable();
            $table->string('cnss')->nullable();
            $table->string('site')->nullable();
            $table->date('datedenaissance')->nullable();
            $table->string('service')->nullable();
            $table->string('section')->nullable();
            $table->date('datedeambauche')->nullable();
            $table->date('datedesortie')->nullable();
            $table->date('radio2021')->nullable();
            $table->string('audio2021')->nullable();
            $table->date('dateinitialaudio')->nullable();
            $table->date('dateapres6mois')->nullable();
            $table->string('remarqueMedecin0')->nullable();
            $table->date('visite2020')->nullable();
            $table->date('visite2021')->nullable();
            $table->string('aptitudephysique')->nullable();
            $table->string('remarquemedecin')->nullable();
            $table->string('typehandicap')->nullable();
            $table->string('maladie')->nullable();
            $table->string('mesureprise')->nullable();
            $table->date('debutdegrocesse')->nullable();
            $table->date('findegrocesse')->nullable();
            $table->date('dateprevudelaprmierevisite')->nullable();
            $table->string('remarquemedecinpremierevisite')->nullable();
            $table->date('dateprevude2evisite')->nullable();
            $table->string('remarquemedecin2evisite')->nullable();
            $table->date('datevisitespantanée')->nullable();
            $table->string('motif')->nullable();
            $table->string('remarquemedecin1')->nullable();
            $table->date('datevisitecasspecifique')->nullable();
            $table->string('motifdevisite')->nullable();
            $table->string('naturedemaladie')->nullable();
            $table->string('remarquemedecinpendantlavisite')->nullable();






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
        Schema::dropIfExists('visites');
    }
}
