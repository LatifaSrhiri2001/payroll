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
        Schema::create('primes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_id');
            $table->enum('type_prime', ['Ancienneté', 'Performance', 'Fin d’année', 'Exceptionnelle']);
            $table->decimal('montant', 10, 2);
            $table->date('date_prime');
            $table->boolean('imposable')->default(1);
            $table->timestamps();
    
            $table->foreign('employe_id')->references('id')->on('employes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primes');
    }
};
