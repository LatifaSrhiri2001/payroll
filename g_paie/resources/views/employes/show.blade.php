@extends('layouts.app')

@section('content')

<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  
  <h1 class="font-bold">Détails de l'Employé</h1>
  <p>Nom : {{ $employe->nom }}</p>
  <p>Prénom : {{ $employe->prenom }}</p>
  <p>Salaire de Base : {{ number_format($employe->salaire_base, 2, ',', ' ') }} MAD</p>
  <p>CIN : {{ $employe->cin }}</p> 

  



</div>

@endsection
