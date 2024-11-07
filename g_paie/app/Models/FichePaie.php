<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichePaie extends Model
{
    use HasFactory;

    // Spécifier le nom de la table si différent de la convention Laravel
    protected $table = 'fiche_paie';

    // Définir les champs pouvant être remplis en masse
    protected $fillable = [
        'mois',
        'annee',
        'salaire_base',
        'primes_total',
        'cotisations_total',
        'deductions_total',
        'heures_supp_total',
        'conges_total',
        'absences_total',
        'salaire_brut',
        'salaire_net',
        'cin' 
    ];

    
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'cin', 'cin');
    }
}
