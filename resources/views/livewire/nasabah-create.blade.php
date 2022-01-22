<div>
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" wire:model="name">
        </div>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
    </form>
</div>
