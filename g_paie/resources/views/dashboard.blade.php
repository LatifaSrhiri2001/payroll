@extends('layouts.app')

@section('content')



<div class="flex flex-row space-x-2">
<x-mary-stat title="Primes" value="{{ number_format($prime, 2, ',', ' ') }} MAD" icon="o-currency-dollar" tooltip="Hello" class="shadow separator" />
 
<x-mary-stat
    title="Employes"
  
    value="{{ $employe}}"
    class="shadow separator"
    icon="o-user-group"
    tooltip-bottom="There" />
 
<x-mary-stat
    title="absentéisme"
    
    value="{{ $tauxAbsentéisme }} %"
    icon="o-calendar-days"
    class="shadow separator"
    tooltip-left="Ops!" />
 
{{-- <x-mary-stat
  
    title="Sales"
    description="This month"
    value="22.124"
    icon="o-arrow-trending-down"
    class="text-orange-500 shadow separator"
    color="text-pink-500"
    tooltip-right="Gosh!" /> --}}

  </div>
 
@endsection
