@extends('layout.index',(['title'=> 'Transaksi']))
@section('content')
    <div class="mt-3 p-2 row">
        <h2 class="col">Poin Transaksi</h2>
    </div>
    <div class="p-2 bg-light">
        <livewire:poin-index />
    </div>
@endsection
