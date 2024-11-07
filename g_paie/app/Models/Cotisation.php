<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    use HasFactory;


    protected $table = 'cotisations';

    public $timestamps = false; 

    protected $fillable = ['employe_cin', 'type_cotisation', 'taux', 'base_calcul', 'montant'];
}
