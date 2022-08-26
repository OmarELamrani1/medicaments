<div>
    

    

<?php $__env->startSection('content'); ?>


  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">


              <button wire:click="create()"
                class="my-4 inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base font-bold text-black shadow-sm hover:bg-red-700">
                Ajouter médicament
            </button>
            <?php if($isModalOpen): ?>
            <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>


                
              </div>
              <div class="card-header pb-0">
                <h6>Les médicaments</h6>
              </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medicament</th>
                      
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php $__currentLoopData = $medicaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?php echo e($medicament->designation); ?></h6>
                              <p class="text-xs text-secondary mb-0"><?php echo e($medicament->designation); ?></p>
                            </div>
                          </div>
                        </td>
                        

                        <td class="align-middle">
                            <button wire:click="edit(<?php echo e($medicament->id); ?>)" class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete(<?php echo e($medicament->id); ?>)" class="btn btn-danger btn-sm">Delete</button>
                        </td>

                      </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <?php $__env->stopSection(); ?>

</div>

<?php echo $__env->make('layouts.user_type.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/omar/Bureau/medicaments/traitements/resources/views/livewire/medicaments.blade.php ENDPATH**/ ?>