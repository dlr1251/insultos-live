<div>    
    <div class="form-group">
        <div class="text-center p-3">Sea creativ@, los insultos repetidos no se registran</div>
        <input type="text" class="form-control" wire:model="title">
        @error('title') <span>{{ $message }}</span> @enderror
    </div>
</div>