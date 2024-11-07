<?php

namespace App\Http\Controllers;
use App\Models\Cotisation;
use Illuminate\Http\Request;
use App\Models\Employe;

class cotisations extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cotisations = Cotisation::with('employe')->get();
        return view('cotisations.index', compact('cotisations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'employe_cin' => 'required|string|max:20|exists:employes,cin',
        'type_cotisation' => 'required|in:CNSS,AMO,CIMR,Assurance Maladie,Assurance Retraite Complementaire',
        'taux' => 'required|numeric|min:0|max:100',
        'base_calcul' => 'required|numeric|min:0',
    ]);

    
    $cotisation = new Cotisation($request->only(['employe_cin', 'type_cotisation', 'taux', 'base_calcul']));
    $cotisation->save();

    return redirect()->route('cotisations.index')->with('success', 'Cotisation créée avec succès.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cotisation $cotisation)
    {
        $cotisation->delete();
        return redirect()->route('cotisations.index')->with('danger', 'cotisation supprimée avec succès.');
 
    }
}
