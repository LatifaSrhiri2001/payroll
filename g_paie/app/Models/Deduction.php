<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    protected $table = 'deductions'; // Specify the table name if it's not the plural of the model name

    protected $fillable = [
        'employe_cin',
        'type_deduction',
        'montant',
        'date_deduction',
        'description',
    ];

    // Define the relationship with the Employe model
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employe_cin', 'cin');
    }
}

