<?php

namespace App\Http\Livewire;

use App\Models\Nasabah;
use App\Models\Transaksi;
use Livewire\Component;

class TransaksiCreate extends Component
{
    public $account_id;
    public $description;
    public $type;
    public $amount;

    public function render()
    {
        $params = [
            'nasabah' => Nasabah::get(),
            'account_id' => $this->account_id
        ];
        return view('livewire.transaksi-create', $params);
    }

    public function store()
    {
        $this->validate([
            'account_id' => 'required',
            'description' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ], [
            'account_id.required' => 'Nasabah belum dipilih',
            'description.required' => 'Deskripsi belum diisi',
            'type.required' => 'Type transaksi belum dipilih',
            'amount.required' => 'Nominal Transaksi belum diisi',
            'amount.integer' => 'Nominal harus angka',
        ]);

        $transaksi = new Transaksi;
        $transaksi->account_id = $this->account_id;
        $transaksi->description = $this->description;
        $transaksi->status = $this->type;
        $transaksi->amount = $this->amount;
        $transaksi->save();

        $this->account_id = null;
        $this->description = null;
        $this->type = null;
        $this->amount = null;

        $this->emit('transaksiSave', $transaksi);
    }
}
