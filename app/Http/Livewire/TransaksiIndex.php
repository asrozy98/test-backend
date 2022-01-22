<?php

namespace App\Http\Livewire;

use App\Models\Transaksi;
use Livewire\Component;

class TransaksiIndex extends Component
{
    protected $listeners = [
        'transaksiSave' => 'handlerStore'
    ];

    public function render()
    {
        $params = [
            'data' => Transaksi::get(),
        ];
        return view('livewire.transaksi-index', $params);
    }

    public function handlerStore($transaksi)
    {
        session()->flash('status', 'Transaksi disimpan');
    }
}
