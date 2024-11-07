<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $table = 'employes';

    protected $fillable = [
        'nom', 'prenom', 'cin', 'date_naissance', 'date_embauche', 'salaire_base', 
        'situation_familiale', 'nombre_enfants', 'anciennete'
    ];
    

    public function salaires()
    {
        return $this->hasOne(Salaire::class);
    }

    public function heuresSupplementaires()
    {
        return $this->hasMany(HeureSupplementaire::class);
    }

    public function conges()
    {
        return $this->hasMany(Conges::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function cotisations()
    {
        return $this->hasMany(Cotisation::class);
    }
    public function fichePaie()
    {
        return $this->hasMany(FichePaie::class);
    }
}
