<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class employeManagement extends Controller
{
    public function index()
    {
        $employes = Employe::all();
        $employes = Employe::paginate(6);
        return view('employes.index', compact('employes'));
    }

    public function create()
    {
        return view('employes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cin' => 'required|unique:employes,cin|max:8',
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'date_naissance' => 'required|date',
            'situation_familiale' => 'max:50',
            'nombre_enfants' => 'integer',
            'date_embauche' => 'date',
            'salaire_base' => 'numeric',
            'anciennete' => 'integer',
        ]);

        Employe::create($request->all());

        return redirect()->route('employes.index')->with('success', 'Employe created successfully.');
    }

    public function show(Employe $employe)
    {
        return view('employes.show', compact('employe'));
    }

    public function edit(Employe $employe)
    {
        return view('employes.edit', compact('employe'));
    }

    public function update(Request $request, Employe $employe)
    {
        $request->validate([
            'cin' => 'required|max:8|unique:employes,cin,' . $employe->id,
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'date_naissance' => 'required|date',
            'situation_familiale' => 'max:50',
            'nombre_enfants' => 'integer',
            'date_embauche' => 'date',
            'salaire_base' => 'numeric',
            'anciennete' => 'integer',
            'departement' => 'required',
            'sexe' => 'required',
        ]);

        $employe->update($request->all());

        return redirect()->route('employes.index')->with('success', 'Employe updated successfully.');
    }

    public function destroy(Employe $employe)
    {
        $employe->delete();
        return redirect()->route('employes.index')->with('success', 'Employe deleted successfully.');
    }
}
