@extends('layout.index',(['title'=> 'Nasabah']))
@section('content')
    <div class="mt-3 p-2 row">
        <h2 class="col">Nasabah</h2>
        <div class="col-md-auto">
            <div class="col-md-auto">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTransaksi">Tambah
                    Nasabah</button>
                <!-- Modal -->
                <div class="modal fade" id="addTransaksi" tabindex="-1" aria-labelledby="addTransaksiLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addTransaksiLabel">Tambah Nasabah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <livewire:nasabah-create />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2 bg-light">
        <livewire:nasabah-index />
    </div>
@endsection
