<?php

namespace App\Http\Livewire;

use App\Models\Nasabah;
use App\Models\Transaksi;
use Carbon\Carbon;
use Livewire\Component;

class LaporanIndex extends Component
{
    public $filter;
    public $dateStart;
    public $dateEnd;

    public function render()
    {
        $start =  Carbon::parse($this->dateStart ?? Carbon::now()->subYears(1))->startOfDay();
        $end = Carbon::parse($this->dateEnd ?? Carbon::now())->endOfDay();
        $filter['account_id'] =  $this->filter == null ? null : $this->filter;
        if ($filter['account_id']) {
            $transaksi =    Transaksi::where($filter)->whereBetween('transaction_date', [$start->toDateTimeString(), $end->toDateTimeString()])->get();
        } else {
            $transaksi =    Transaksi::whereBetween('transaction_date', [$start->toDateTimeString(), $end->toDateTimeString()])->get();
        }

        $params = [
            'nasabah' => Nasabah::get(),
            'data' => $transaksi,
            'start' => $start->format('m/d/Y'),
            'end' => $end->format('m/d/Y'),
        ];
        return view('livewire.laporan-index', $params);
    }

    public function resetFilter()
    {
        $this->filter = null;
        $this->dateStart = null;
        $this->dateEnd = null;
    }
}
