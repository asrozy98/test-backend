@extends('layout.index',(['title'=> 'Transaksi']))
@section('content')
    <div class="mt-3 p-2 row">
        <h2 class="col">Transaksi</h2>
        <div class="col-md-auto">
            <div class="col-md-auto">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTransaksi">Tambah
                    Transaksi</button>
                <!-- Modal -->
                <div class="modal fade" id="addTransaksi" tabindex="-1" aria-labelledby="addTransaksiLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addTransaksiLabel">Tambah Transaksi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <livewire:transaksi-create />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2 bg-light">
        <livewire:transaksi-index />
    </div>
@endsection
@push('css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.input-daterange input').each(function() {
            $(this).datepicker();
        });
    </script>
@endpush
