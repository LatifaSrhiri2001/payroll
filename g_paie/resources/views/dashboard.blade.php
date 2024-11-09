@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<div class="flex flex-row space-x-2">
<x-mary-stat title="Primes" value="{{ number_format($prime, 2, ',', ' ') }} MAD" icon="o-currency-dollar" class="shadow separator" />
 
<x-mary-stat
    title="Employes"
  
    value="{{ $employe}}"
    class="shadow separator"
    icon="o-user-group"
  />
 
<x-mary-stat
    title="absentéisme"
    
    value="{{ $tauxAbsentéisme }} %"
    icon="o-calendar-days"
    class="shadow separator"
    />
 


  </div>


 
@endsection
