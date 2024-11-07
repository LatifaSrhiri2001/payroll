@extends('layouts.app')

@section('content')
<div class="container max-w-sm mx-auto mt-10  p-6 ">
    <h1 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-white">Ajouter une Prime</h1>
    <form action="{{ route('primes.store') }}" method="POST">
        @csrf
        
        <div class="mb-4">
            <label for="cin" class="block text-sm font-medium text-gray-900 dark:text-white">CIN de l'Employé</label>
            <div class="flex mt-1">
                <span class="inline-flex items-center px-3 text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <!-- Utilisation de Heroicons -->
                    <x-heroicon-o-user class="w-5 h-5 text-gray-500 dark:text-gray-400" />
                </span>
                <input type="text" name="cin" id="cin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="CIN de l'employé" required>
            </div>
        </div>

        <div class="mb-4">
            <label for="type_prime" class="block text-sm font-medium text-gray-900 dark:text-white">Type de Prime</label>
            <select name="type_prime" id="type_prime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <option value="Ancienneté">Ancienneté</option>
                <option value="Performance">Performance</option>
                <option value="Fin d’année">Fin d’année</option>
                <option value="Exceptionnelle">Exceptionnelle</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="montant" class="block text-sm font-medium text-gray-900 dark:text-white">Montant</label>
            <input type="text" name="montant" id="montant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
        </div>

        <div class="mb-4">
            <label for="date_prime" class="block text-sm font-medium text-gray-900 dark:text-white">Date de Prime</label>
            <input type="date" name="date_prime" id="date_prime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
        </div>

        <div class="mb-4">
            <label for="imposable" class="block text-sm font-medium text-gray-900 dark:text-white">Imposable</label>
            <select name="imposable" id="imposable" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>

           </form>
</div>
@endsection
