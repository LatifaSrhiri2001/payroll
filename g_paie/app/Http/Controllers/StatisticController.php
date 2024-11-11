<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Absence;
use App\Models\Employe;
use App\Models\Admin;
use App\Models\Conge;
    use Carbon\Carbon;
use App\Models\Deduction;

class StatisticController extends Controller
{
    public function statistic(): View
    {
        // Récupération des informations de l'admin
        $admin = Admin::where('email', 'admintest@example.com')->first();

        // Statistiques employé et primes
        $totalEmployes = Employe::count();
        $primeMoyenne = DB::table('primes')->avg('montant');

        // Calcul des absences et taux d'absentéisme
        $totalAbsences = Absence::whereMonth('date_absence', 10)
            ->whereYear('date_absence', 2024)
            ->sum('nombre_jours');
        $joursTravailPossibles = $totalEmployes * 20;
        $tauxAbsentéisme = ($joursTravailPossibles > 0) ? ($totalAbsences / $joursTravailPossibles) * 100 : 0;

        // graphique semi-donut sur les types de congés
        $congesData = Conge::selectRaw('type_conge, count(*) as total')->groupBy('type_conge')->get();
        $congesLabels = $congesData->pluck('type_conge')->toArray();
        $congesTotals = $congesData->pluck('total')->toArray();

        // Données pour le graphique des déductions
        $deductionsData = Deduction::all()->map(function ($deduction) {
            return [
                'montant' => $deduction->montant,
                'date' => $deduction->date_deduction,
            ];
        });
        // gender donnut
         
        $gendersData = Employe::selectRaw('sexe, count(*) as total')->groupBy('sexe')->get();
        $gendersLabels = $gendersData->pluck('sexe')->toArray();
        $gendersTotals = $gendersData->pluck('total')->toArray();

        // dernier absence   
        $dernieresAbsences = Absence::latest('date_absence')->take(5)->get();
        // Retourne les données à la vue
        return view('dashboard', compact(
            'admin',
            'totalEmployes',
            'primeMoyenne',
            'tauxAbsentéisme',
            'congesLabels',
            'congesTotals',
            'gendersLabels',
            'gendersTotals',
            'deductionsData',
            'dernieresAbsences'
        ));
    }
}
