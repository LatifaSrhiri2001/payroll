<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteretsCreditLogement extends Model
{
    use HasFactory;

    protected $table = 'interets_credit_logement'; 
    protected $fillable = [
        'employe_cin',
        'taux_interet',
        'montant_interet',
        'date_interet',
    ];

    
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employe_cin', 'cin');
    }
}

