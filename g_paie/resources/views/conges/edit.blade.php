@extends('layouts.app')

@section('content')

{{-- alert of success --}}
@if (session('success'))
    <x-mary-alert 
        class="bg-green-200"
        title="Success" 
        description="{{ session('success') }}" 
        icon="o-check-circle" 
        dismissible 
    />
@else
    <x-mary-alert 
        class="bg-red-200"
        title="Error" 
        description="mis à jour echoué." 
        icon="o-exclamation-triangle" 
        dismissible 
    />
@endif

{{-- end alert  --}}

    <form action="{{ route('conges.update', $conge->id) }}" method="POST" class="max-w-sm mx-auto">
        @csrf
        @method('PUT')
        
        <div>
            <label for="type_conge" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type de Congé</label>
            <select name="type_conge" id="type_conge"
                class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                required>
                <option value="payé" {{ $conge->type_conge == 'payé' ? 'selected' : '' }}>Payé</option>
                <option value="maladie" {{ $conge->type_conge == 'maladie' ? 'selected' : '' }}>Maladie</option>
                <option value="sans solde" {{ $conge->type_conge == 'sans solde' ? 'selected' : '' }}>Sans Solde</option>
            </select>
        </div>
        <div>
            <label for="date_debut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de
                Début</label>
            <input type="date" name="date_debut" id="date_debut" value="{{ $conge->date_debut }}"
                class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                required>
        </div>
        <div>
            <label for="date_fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de Fin</label>
            <input type="date" name="date_fin" id="date_fin" value="{{ $conge->date_fin }}"
                class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                required>
        </div>
        <div>
            <label for="statut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Statut</label>
            <select name="statut" id="statut"
                class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                required>
                <option value="Approuvé" {{ $conge->statut == 'Approuvé' ? 'selected' : '' }}>Approuvé</option>
                <option value="En attente" {{ $conge->statut == 'En attente' ? 'selected' : '' }}>En attente</option>
                <option value="Refusé" {{ $conge->statut == 'Refusé' ? 'selected' : '' }}>Refusé</option>
            </select>
        </div>
        <div>
            <label for="montant_deduction" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Montant de
                Déduction</label>
            <input type="number" name="montant_deduction" id="montant_deduction" value="{{ $conge->montant_deduction }}"
                step="0.01"
                class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 dark:bg-gray-600 dark:border-gray-500 dark:text-white">
        </div>
        <button type="submit"
            class="w-full mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier
            conge</button>
    </form>




 
@endsection
