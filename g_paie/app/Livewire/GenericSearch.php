<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GenericSearch extends Component
{
    public $searchTerm = '';
    public $model;
    public $columns;

    public function render()
    {
        $modelClass = 'App\\Models\\' . $this->model;

        // Créer la requête dynamique en fonction des colonnes spécifiées
        $query = $modelClass::query();
        foreach ($this->columns as $column) {
            $query->orWhere($column, 'like', '%' . $this->searchTerm . '%');
        }
        
        $results = $query->get();

        return view('livewire.generic-search', [
            'results' => $results,
        ]);
    }
}
