<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteretsCreditLogementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interets_credit_logement', function (Blueprint $table) {
            $table->id();
            $table->string('employe_cin', 20);
            $table->decimal('taux_interet', 5, 2);
            $table->decimal('montant_interet', 10, 2);
            $table->date('date_interet');
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
        Schema::dropIfExists('interets_credit_logement');
    }
}

