<?php

namespace App\Http\Livewire;

use App\Models\Nasabah;
use Livewire\Component;

class PoinIndex extends Component
{
    public function render()
    {
        $params = [
            'data' => Nasabah::get(),
        ];
        return view('livewire.poin-index', $params);
    }
}
