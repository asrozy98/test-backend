<?php

namespace App\Http\Livewire;

use App\Models\Nasabah;
use Livewire\Component;

class NasabahIndex extends Component
{
    protected $listeners = [
        'nasabahSave' => 'handlerStore'
    ];

    public function render()
    {
        $params = [
            'data' => Nasabah::get(),
        ];

        return view('livewire.nasabah-index', $params);
    }

    public function handlerStore($nasabah)
    {
        session()->flash('status', 'Nasabah disimpan');
    }
}
