@extends('layouts.app')

@section('content')
    <form action="{{ route('employes.store') }}" method="POST" class="max-w-sm mx-auto">
        @csrf

        <div class="flex flex-row space-x-3 mb-5">
            <div class="w-1/2">
                <label for="cin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CIN</label>
                <input type="text" id="cin" name="cin" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
            </div>

            <div class="w-1/2">
                <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                <input type="text" id="nom" name="nom" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
            </div>
        </div>

        <div class="flex flex-row space-x-3 mb-5">
            <div class="w-1/2">
                <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                <input type="text" id="prenom" name="prenom" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
            </div>

            <div class="w-1/2">
                <label for="date_naissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de Naissance</label>
                <input type="date" id="date_naissance" name="date_naissance" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
            </div>
        </div>

        <div class="flex flex-row space-x-3 mb-5">
            <div class="w-1/2">
                <label for="situation_familiale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Situation Familiale</label>
                <select id="situation_familiale" name="situation_familiale" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                    <option value="">Sélectionner</option>
                    <option value="Célibataire">Célibataire</option>
                    <option value="Marié(e)">Marié(e)</option>
                    
                </select>
            </div>

            <div class="w-1/2">
                <label for="nombre_enfants" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre d'Enfants</label>
                <input type="number" id="nombre_enfants" name="nombre_enfants" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
            </div>
        </div>

        <div class="flex flex-row space-x-3 mb-5">
            <div class="w-1/2">
                <label for="date_embauche" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'Embauche</label>
                <input type="date" id="date_embauche" name="date_embauche" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
            </div>

            <div class="w-1/2">
                <label for="salaire_base" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salaire de Base</label>
                <input type="number" step="0.01" id="salaire_base" name="salaire_base" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
            </div>
        </div>

        <div class="mb-5">
            <label for="anciennete" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ancienneté</label>
            <input type="number" id="anciennete" name="anciennete" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
        </div>

        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection

