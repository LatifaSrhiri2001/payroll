<?php
namespace App\Http\Controllers;
use App\Models\Employe;
use App\Models\Prime;
use Illuminate\Http\Request;

class PrimeController extends Controller
{
    public function index()
    {
        $primes = Prime::all();
        return view('primes.index', compact('primes'));
    }

    public function create()
    {
        return view('primes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
             'cin' => 'required|exists:employes,cin',
            'type_prime' => 'required|in:Ancienneté,Performance,Fin d’année,Exceptionnelle',
            'montant' => 'required|numeric',
            'date_prime' => 'required|date',
            'imposable' => 'boolean',
        ]);

        Prime::create($request->all());
        return redirect()->route('primes.index')->with('success', 'Prime ajoutée avec succès.');
    }

    public function show(Prime $prime)
    {
        return view('primes.show', compact('prime'));
    }

    public function edit(Prime $prime)
    {
        return view('primes.edit', compact('prime'));
    }

    public function update(Request $request, Prime $prime)
    {
        $request->validate([
            
            'type_prime' => 'required|in:Ancienneté,Performance,Fin d’année,Exceptionnelle',
            'montant' => 'required|numeric',
            'date_prime' => 'required|date',
            'imposable' => 'boolean',
        ]);

        $prime->update($request->all());
        return redirect()->route('primes.index')->with('success', 'Prime mise à jour avec succès.');
    }

    public function destroy(Prime $prime)
    {
        $prime->delete();
        return redirect()->route('primes.index')->with('success', 'Prime supprimée avec succès.');
    }
}
