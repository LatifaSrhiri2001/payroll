<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeuresSupplementaires extends Model
{
    use HasFactory;

    protected $table = 'heures_supplementaires'; 

    protected $fillable = [
        'employe_cin',
        'date_heure_supp',
        'nombre_heures',
        'taux_heure',
    ];

    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employe_cin', 'cin');
    }
}

