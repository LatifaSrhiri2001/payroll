<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Employe;
use Illuminate\Http\Request;

class telechargerPaieController extends Controller {

    public function downloadPaie($employeId)
    {
        $employe = Employe::find($employeId);
        
        // Calculate all necessary data like in the showPaie method
        $salaireBase = $employe->salaire_base;
        $tauxAnciennete = 5; // Example value
        $primeAnciennete = $salaireBase * ($tauxAnciennete / 100);
        
        // Example values for indemnités
        $indemnitesImposables = [500, 200]; 
        $indemnitesNonImposables = [100];
        
        $gainSalaireBrut = $salaireBase;
        $salaireBrutTotal = $gainSalaireBrut + $primeAnciennete + array_sum($indemnitesImposables);
        
        // Calculate deductions
        $cnss = $salaireBrutTotal * 0.0448;
        $amo = $salaireBrutTotal * 0.0226;
        $assuranceMaladie = 150;
        $assuranceRetraite = 100;
        
        $totalRetenues = $cnss + $amo + $assuranceMaladie + $assuranceRetraite;
        $salaireNetImposable = $salaireBrutTotal - array_sum($indemnitesNonImposables);
        $salaireNet = $salaireNetImposable - $totalRetenues;

        // Generate the PDF
        $pdf = PDF::loadView('paie.fiche_paie_simple', [
            'employe' => $employe,
            'salaireBase' => $salaireBase,
            'primeAnciennete' => $primeAnciennete,
            'taux' => $tauxAnciennete,
            'indemnitesImposables' => $indemnitesImposables,
            'indemnitesNonImposables' => $indemnitesNonImposables,
            'gainSalaireBrut' => $gainSalaireBrut,
            'salaireBrutTotal' => $salaireBrutTotal,
            'cnss' => $cnss,
            'amo' => $amo,
            'assuranceMaladie' => $assuranceMaladie,
            'assuranceRetraite' => $assuranceRetraite,
            'salaireNetImposable' => $salaireNetImposable,
            'totalRetenues' => $totalRetenues,
            'salaireNet' => $salaireNet,
        ]);
        
        return $pdf->download('paie.fiche_paie_' . $employe->id . '.pdf');
    }
}
