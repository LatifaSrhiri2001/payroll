<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    public $timestamps = false;
    protected $fillable = ['employe_cin', 'type_conge', 'date_debut', 'date_fin', 'nombre_jours', 'statut', 'montant_deduction'];

    public function employe() {
        return $this->belongsTo( Employe::class, 'employe_cin', 'cin' );
    }

}
