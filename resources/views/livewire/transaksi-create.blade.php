<div>
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label for="account_id" class="form-label">Nasabah</label>
            <select class="form-select @error('account_id') is-invalid @enderror" wire:model="account_id">
                <option value="" selected>Pilih Nasabah</option>
                @foreach ($nasabah as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        @error('account_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model="description">
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select @error('type') is-invalid @enderror" wire:model="type">
                <option selected>Pilih Type</option>
                <option value="D">Debit</option>
                <option value="C">Credit</option>
            </select>
        </div>
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" class="form-control @error('amount') is-invalid @enderror" wire:model="amount">
        </div>
        @error('amount')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
    </form>
</div>
