@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Primes</h1>
        <a href="{{ route('primes.create') }}" class="btn btn-primary">Ajouter une Prime</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>cin</th>
                    <th>Type Prime</th>
                    <th>Montant</th>
                    <th>Date Prime</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($primes as $prime)
                    <tr>
                        <td>{{ $prime->id }}</td>
                        <td>{{ $prime->cin }}</td>
                        <td>{{ $prime->type_prime }}</td>
                        <td>{{ $prime->montant }}</td>
                        <td>{{ $prime->date_prime }}</td>
                        <td>
                            <a href="{{ route('primes.edit', $prime->id) }}" class="btn btn-warning">Modifier</a>
                            <button 
                            type="button" 
                            onclick="showDeleteModal({{ $prime->id }})" 
                            class="btn btn-danger"
                            data-modal-target="popup-modal" 
                            data-modal-toggle="popup-modal">
                            Supprimer
                        </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

     @include('components.primes.deletePrime')  
   
@endsection
