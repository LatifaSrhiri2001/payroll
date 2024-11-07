@extends('layouts.app')

@section('content')
    
    <div class="  flex items-center justify-center">
      
       <form action="{{ route('conges.store') }}" method="POST" class="space-y-6 bg-white w-1/2   shadow-lg rounded-lg p-8">
        @csrf
        <div class="flex gap-x-6 space-x-4">
            <div class="mb-4 w-full relative">
                <label for="employe_cin" class="block text-gray-700 font-semibold mb-2">Employé</label>
                <div class="flex items-center">


                    <select name="employe_cin" id="employe_cin"
                        class="form-select w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-700 focus:ring focus:ring-indigo-200"
                        required>
                        @foreach ($employes as $employe)
                            <option value="{{ $employe->cin }}">{{ $employe->cin }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="mb-4 w-full relative">
                <label for="type_conge" class="block text-gray-700 font-semibold mb-2">Type de Congé</label>
                <select name="type_conge" id="type_conge"
                    class="form-select w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-700 focus:ring focus:ring-indigo-200"
                    required>
                    <option value="payé">Payé</option>
                    <option value="maladie">Maladie</option>
                    <option value="sans solde">Sans Solde</option>
                </select>
            </div>
        </div>

        <div class="flex gap-x-6 space-x-4">
            <div class="mb-4 w-1/2 relative">
                <label for="date_debut" class="block text-gray-700 font-semibold mb-2">Date de Début</label>
                <div class="flex items-center">
                    <input type="date" name="date_debut"
                        class="form-input w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-700 focus:ring focus:ring-indigo-200"
                        required>

                </div>
            </div>

            <div class="mb-4 w-1/2 relative">
                <label for="date_fin" class="block text-gray-700 font-semibold mb-2">Date de Fin</label>
                <div class="flex items-center">
                    <input type="date" name="date_fin"
                        class="form-input w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-700 focus:ring focus:ring-indigo-200"
                        required>

                </div>
            </div>
        </div>


        <div class="mb-4">
            <label for="statut" class="block text-gray-700 font-semibold mb-2">Statut</label>
            <select name="statut" id="statut"
                class="form-select w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-700 focus:ring focus:ring-indigo-200"
                required>
                <option value="Approuvé">Approuvé</option>
                <option value="En attente">En attente</option>
                <option value="Refusé">Refusé</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="montant_deduction" class="block text-gray-700 font-semibold mb-2">Montant de Déduction</label>
            <div class="flex items-center">
                <input type="number" name="montant_deduction"
                    class="form-input w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-700 focus:ring focus:ring-indigo-200"
                    step="0.01">

            </div>
        </div>

        <button type="submit"
            class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-500 focus:ring focus:ring-indigo-200">
            Ajouter
        </button>
    </form> 
    </div>
    
@endsection
