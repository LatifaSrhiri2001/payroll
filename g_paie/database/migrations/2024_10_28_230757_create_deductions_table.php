<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->string('employe_cin', 20);
            $table->enum('type_deduction', ['Prêt', 'Avance', 'Autre']);
            $table->decimal('montant', 10, 2);
            $table->date('date_deduction');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('deductions');
    }
}
