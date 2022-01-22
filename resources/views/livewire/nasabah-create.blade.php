<div>
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control  @error('name') is-invalid @enderror" wire:model="name">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
    </form>
</div>
