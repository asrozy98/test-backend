<?php

namespace App\Http\Livewire;

use App\Models\Nasabah;
use Livewire\Component;

class NasabahCreate extends Component
{
    public $name;

    public function render()
    {
        $params = [
            'name' => $this->name,
        ];
        return view('livewire.nasabah-create', $params);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama belum diisi'
        ]);

        $nasabah = new Nasabah;
        $nasabah->name = $this->name;
        $nasabah->save();

        $this->name = null;
        $this->emit('nasabahSave', $nasabah);
    }
}
