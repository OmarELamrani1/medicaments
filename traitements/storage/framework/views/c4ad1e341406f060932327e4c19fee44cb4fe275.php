<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Médicament</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Médicament" wire:model="medicament">
        <?php $__errorArgs = ['medicament'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Ajouter médicament</button>
</form><?php /**PATH /home/omar/Bureau/medicaments/traitements/resources/views/livewire/create.blade.php ENDPATH**/ ?>