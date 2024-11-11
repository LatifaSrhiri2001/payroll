@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    {{-- STATISTIC CARDS --}}
    <div class="flex flex-row space-x-1 mb-12 py-6">
        <x-mary-stat title="Primes" value="{{ number_format($primeMoyenne, 2, ',', ' ') }} MAD" icon="o-currency-dollar"
            class="bg-white border border-gray-200 rounded-lg  px-4 shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" />

        <x-mary-stat title="Employes" value="{{ $totalEmployes }}"
            class="bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700"
            icon="o-user-group" />

        <x-mary-stat title="absentéisme" value="{{ $tauxAbsentéisme }} %" icon="o-calendar-days"
            class="bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" />



    </div>

    {{-- charts --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-lg border">
            <h3 class="text-xl font-semibold mb-4">Statistiques des Congés</h3>
            @include('components.charts.chart2')
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-2 rounded-lg border ">
            <h3 class="text-xl font-semibold mb-4"></h3>
            @include('components.charts.chart1')
        </div>
    </div>
    {{--  --}}
    <div class="grid  grid-cols-1 lg:grid-cols-2 gap-4">
        <div class=" mt-8 relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1 class="text-center font-bold">Listes des dernièrs absences</h1>
           @include('components.admin_tables.absence_employe')
        </div>
        <div class="sexe_static_chart bg-white p-2 rounded-lg border mt-5 ">
            @include('components.charts.sexe_static_chart')
        </div>

    </div>







<s @endsection
