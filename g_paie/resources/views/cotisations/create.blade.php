@extends('layouts.app') <!-- Change to your layout file if necessary -->

@section('content')
   
    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ajouter une Cotisation</h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                  <form action="{{ route('cotisations.store') }}" method="POST">
                      @csrf
                      <div class="mb-4 w-full relative">
                          <label for="employe_cin" class="block text-gray-700 font-semibold mb-2">Employé</label>
                          <select name="employe_cin" id="employe_cin" class="form-select w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-700 focus:ring focus:ring-indigo-200" required>
                              @foreach ($employes as $employe)
                                  <option value="{{ $employe->cin }}">{{ $employe->cin }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div>
                          <label for="type_cotisation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Type de Cotisation</label>
                          <select id="type_cotisation" name="type_cotisation" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                              <option value="">Sélectionner un type</option>
                              <option value="CNSS">CNSS</option>
                              <option value="AMO">AMO</option>
                              <option value="CIMR">CIMR</option>
                              <option value="Assurance Maladie">Assurance Maladie</option>
                              <option value="Assurance Retraite Complementaire">Assurance Retraite Complementaire</option>
                          </select>
                          @error('type_cotisation')
                              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                          @enderror
                      </div>
                      
                      <div>
                          <label for="base_calcul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Base de Calcul</label>
                          <input type="number" id="base_calcul" name="base_calcul" required min="0" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Entrez la base de calcul">
                          @error('base_calcul')
                              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                          @enderror
                      </div>
                      <div class="flex items-center justify-end">
                          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter Cotisation</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection
