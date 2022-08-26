<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Médicament</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Médicament" wire:model="medicament">
        @error('medicament') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Ajouter médicament</button>
</form>