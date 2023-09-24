<?php $__env->startSection('title', 'Permissions'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Permissions</h1>
        <a href="<?php echo e(route('permissions.create')); ?>" class="btn btn-sm btn-primary" >
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

    
    <?php echo $__env->make('common.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Permissions</h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="40%">Name</th>
                            <th width="40%">Guard Name</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                               <td><?php echo e($permission->name); ?></td>
                               <td><?php echo e($permission->guard_name); ?></td>
                               <td style="display: flex">
                                   <a href="<?php echo e(route('permissions.edit', ['permission' => $permission->id])); ?>" class="btn btn-primary m-2">
                                        <i class="fa fa-pen"></i>
                                   </a>
                                   <form method="POST" action="<?php echo e(route('permissions.destroy', ['permission' => $permission->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger m-2" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                   </form>
                               </td>
                           </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <?php echo e($permissions->links()); ?>

            </div>
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wijayatoyota/Documents/techtool-laravel-admin/resources/views/permissions/index.blade.php ENDPATH**/ ?>