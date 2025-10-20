<?php

namespace App\Livewire;

use Livewire\Component;

class SearchModal extends Component
{
    // Propriedades para os filtros virão aqui (ex: public $position = '';)

    public function render()
    {
        // Lógica para buscar atletas com base nos filtros virá aqui

        return view('livewire.search-modal');
    }
}