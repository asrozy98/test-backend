<div>
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label for="account_id" class="form-label">Nasabah</label>
            <select class="form-select" wire:model="account_id">
                <option value="" selected>Pilih Nasabah</option>
                @foreach ($nasabah as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" wire:model="description">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" wire:model="type">
                <option selected>Pilih Type</option>
                <option value="D">Debit</option>
                <option value="C">Credit</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" class="form-control" wire:model="amount">
        </div>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
    </form>
</div>
