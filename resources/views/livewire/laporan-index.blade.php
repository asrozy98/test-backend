<div>
    <div class="d-print-none">
        <div class="row align-items-end">
            <h4>Filter</h4>
            <div class="col-3">
                <label for="filter">Nasabah:</label>
                <select class="form-control" wire:model="filter" id="filter" name="filter">
                    <option value="">Semua <i class="bi bi-collection"></i></option>
                    @foreach ($nasabah as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-7">
                <label for="dateRange">Date:</label>
                <div class="input-group input-daterange">
                    <input type="text" class="form-control" wire:model="dateStart" placeholder="{{ $start }}"
                        autocomplete="off" data-provide="datepicker" data-date-autoclose="true"
                        data-date-format="mm/dd/yyyy" data-date-today-highlight="true"
                        onchange="this.dispatchEvent(new InputEvent('input'))">
                    <div class="input-group-addon">to</div>
                    <input type="text" class="form-control" wire:model="dateEnd" placeholder="{{ $end }}"
                        autocomplete="off" data-provide="datepicker" data-date-autoclose="true"
                        data-date-format="mm/dd/yyyy" data-date-today-highlight="true"
                        onchange="this.dispatchEvent(new InputEvent('input'))">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-secondary" wire:click="resetFilter">Reset</button>
                <button class="btn btn-warning" onclick="window.print()">Print</button>
            </div>
        </div>
        <hr>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Description</th>
                <th scope="col">Credit</th>
                <th scope="col">Debit</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ dateFormat($item->transaction_date) }}</td>
                    <td>{{ $item->description }}</td>
                    <td>@if ($item->status == 'C')@currency($item->amount)@else - @endif</td>
                    <td>@if ($item->status == 'D')@currency($item->amount)@else - @endif</td>
                    <td>@currency($item->amount)</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
