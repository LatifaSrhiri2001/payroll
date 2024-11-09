<?php

// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
  use Illuminate\Support\Number;
  use App\Models\Absence;
  use App\Models\Employe;
  use App\Models\Admin;
class StatisticController extends Controller
{
    
   
  public function statistic(): View
  {
   
 
  
 
    
               
    $admin = Admin::where('email', 'admintest@example.com')->first();
          
      $employe = DB::table('employes')->count();
      $prime = DB::table('primes')->avg('montant');

      $totalAbsences = Absence::whereMonth('date_absence', 10)
                         ->whereYear('date_absence', 2024)
                         ->sum('nombre_jours');
      $totalEmployes = Employe::count();
      $joursTravailPossibles = $totalEmployes * 20;

$tauxAbsentéisme = ($totalAbsences / $joursTravailPossibles) * 100;

      return view('dashboard', compact('employe' ,'prime' ,'tauxAbsentéisme','admin'));
  }
  
    
}

