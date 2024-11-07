<?php
namespace App\Http\Controllers;

use App\Models\Conge;
use Illuminate\Http\Request;
use App\Models\Employe;

class CongeController extends Controller
{
    public function index()
    {
        $conges = Conge::with('employe')->get();
        return view('conges.index', compact('conges'));
    }

    public function create()
    {
        $employes = Employe::all(); 
        return view('conges.create', compact('employes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employe_cin' => 'required|exists:employes,cin', 
            'type_conge' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'statut' => 'required|string',
            'montant_deduction' => 'nullable|numeric',
        ]);

        $conge = new Conge($request->all());
        $conge->save();

        return redirect()->route('conges.index')->with('success', 'Congé créé avec succès.');
    }

    public function edit(Conge $conge)
    {
        $employes = Employe::all();
        return view('conges.edit', compact('conge', 'employes'));
    }

    public function update(Request $request, Conge $conge)
    {
        $request->validate([
          
            'type_conge' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'nombre_jours' => 'required|integer',
            'statut' => 'required|string',
            'montant_deduction' => 'nullable|numeric',
        ]);

        $conge->update($request->only([
            'type_conge', 'date_debut', 'date_fin', 'nombre_jours', 'statut', 'montant_deduction'
        ]));
    
        return redirect()->route('conges.index')->with('success', 'Congé mis à jour avec succès.');
    }
    public function destroy(Conge $conge)
    {
        $conge->delete();
        return redirect()->route('conges.index')->with('danger', 'Conge supprimée avec succès.');
    }
}
