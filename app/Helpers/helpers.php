<?php

use App\Models\Transaksi;
use Carbon\Carbon;

function poin($user)
{
    $pulsa = Transaksi::where('account_id', $user)->where('description', 'Beli Pulsa')->get();
    $poinPulsa = 0;
    foreach ($pulsa as $i => $item) {
        if ($item->amount >= 10000 && $item->amount <= 30000) {
            $item->amount -= 10000;
            $sisa = $item->amount - ($item->amount % 2000);
            $poin = $sisa / 1000;
            $poinPulsa += $poin;
        } else if ($item->amount > 30000) {
            $item->amount -= 30000;
            $sisa = $item->amount - ($item->amount % 1000);
            $poin = ($sisa / 1000) * 2;
            $poinPulsa += $poin;
        };
    }

    $listrik = Transaksi::where('account_id', $user)->where('description', 'Bayar Listrik')->get();

    $poinListrik = 0;
    foreach ($listrik as $i => $item) {
        if ($item->amount >= 50000 && $item->amount <= 100000) {
            $item->amount -= 50000;
            $sisa = $item->amount - ($item->amount % 2000);
            $poin = $sisa / 2000;
            $poinListrik += $poin;
        } else if ($item->amount > 100000) {
            $item->amount -= 100000;
            $sisa = $item->amount - ($item->amount % 2000);
            $poin = ($sisa / 2000) * 2;
            $poinListrik += $poin;
        };
    }
    $total = $poinPulsa + $poinListrik;
    return $total;
}

function dateFormat($date)
{
    $format = Carbon::parse($date)->format('Y-m-d');
    return $format;
}
