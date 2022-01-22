<div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nasabah</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Description</th>
                <th scope="col">Debit Credit</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nasabah->name }}</td>
                    <td>{{ dateFormat($item->transaction_date) }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->status }}</td>
                    <td>@currency($item->amount)</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
