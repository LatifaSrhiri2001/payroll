@extends('layouts.app')

@section('content')

<a href="{{ route('conges.create') }}" class="btn btn-primary">Ajouter un Congé</a>
 
{{-- alert of success --}}
@if (session('success'))
    <x-mary-alert 
    class="bg-green-200"
        title="Success" 
        description="{{ session('success') }}" 
        icon="o-check-circle" 
        dismissible 
    />
@endif
{{-- end alert  --}}


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>cin</th>
            <th>Employé</th>
            <th>Type de Congé</th>
            <th>Date de Début</th>
            <th>Date de Fin</th>
            <th>Nombre de Jours</th>
            <th>Statut</th>
            <th>Montant de Déduction</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($conges as $conge)
            <tr>
                <td>{{ $conge->id }}</td>
                <td>{{ $conge->employe->cin }}</td>
                <td>{{ $conge->employe->nom }}</td>
                <td>{{ $conge->type_conge }}</td>
                <td>{{ $conge->date_debut }}</td>
                <td>{{ $conge->date_fin }}</td>
                <td>{{ $conge->nombre_jours }}</td>
                <td>
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{ $conge->statut }}</span>

                    </td>
                <td>{{ $conge->montant_deduction }}</td>
                <td>


                    <a href="{{ route('conges.edit', $conge->id) }}" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        
                      </a>
                      


                    <a href="{{ route('primes.destroy', $conge->id) }}"
                        onclick="event.preventDefault(); if(confirm('Êtes-vous sûr de vouloir supprimer cette conge??')) { document.getElementById('delete-form-{{ $conge->id }}').submit(); }"
                        class="btn btn-danger">
                         
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                       </svg>
                       
                     </a>
                     <form id="delete-form-{{ $conge->id }}" action="{{ route('conges.destroy', $conge->id) }}" method="POST" style="display: none;">
                         @csrf
                         @method('DELETE')
                     </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
