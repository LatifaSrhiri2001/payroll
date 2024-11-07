<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       
        
            Schema::create('employes', function (Blueprint $table) {
                $table->id();
                $table->string('nom');
                $table->string('prenom');
                $table->string('cin');
                $table->date('date_naissance');
                $table->string('situation_familiale');
                $table->integer('nombre_enfants');
                $table->date('date_embauche');
                $table->decimal('salaire_base', 10, 2);
                $table->integer('anciennete');
                $table->timestamps();
            });
            
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
