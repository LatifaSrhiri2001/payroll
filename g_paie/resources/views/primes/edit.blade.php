@extends('layouts.app')

@section('content')



<div class="container max-w-sm mx-auto mt-10  dark:bg-gray-800 p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold mb-6 text-gray-900 dark:text-white">Modifier une Prime</h1>
    <form action="{{ route('primes.update', $prime->id) }}" method="POST">
      @csrf
      @method('PUT')
  
        

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

        <button type="submit" class="w-full bg-blue-800 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-lg focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">Modifier</button>
        <a href="{{ route('primes.index') }}" class="w-full mt-3 inline-block text-center bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-700">Annuler</a>
    </form>
</div>
@endsection
