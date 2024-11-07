<div>
    <input type="text" wire:model="searchTerm" placeholder="Rechercher..." class="border p-2 w-full">
    
    <div class="mt-4">
        @if($searchTerm && count($results) > 0)
            <ul>
                @foreach($results as $result)
                    <li class="p-2 border-b">{{ $result->title ?? $result->name }}</li>
                @endforeach
            </ul>
        @elseif($searchTerm)
            <p>Aucun résultat trouvé.</p>
        @endif
    </div>
</div>

