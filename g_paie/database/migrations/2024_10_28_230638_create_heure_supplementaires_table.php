<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeuresSupplementairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heures_supplementaires', function (Blueprint $table) {
            $table->id();
            $table->string('employe_cin', 20);
            $table->date('date_heure_supp');
            $table->decimal('nombre_heures', 5, 2);
            $table->decimal('taux_heure', 10, 2);
            $table->decimal('montant_total', 10, 2)->storedAs('nombre_heures * taux_heure');
            $table->foreign('employe_cin')->references('cin')->on('employes')->onDelete('cascade');
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
        Schema::dropIfExists('heures_supplementaires');
    }
}
