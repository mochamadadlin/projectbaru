<?php $__env->startSection('title', 'Users List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Users</h1>
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo e(route('users.export')); ?>" class="btn btn-sm btn-success">
                        <i></i> Export To Excel
                    </a>
                </div>
                
            </div>

        </div>

        
        <?php echo $__env->make('common.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Users</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="20%">Name</th>
                                <th width="25%">Email</th>
                                <th width="15%">Mobile</th>
                                <th width="15%">Role</th>
                                <th width="15%">Status</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->full_name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->mobile_number); ?></td>
                                    <td><?php echo e($user->roles ? $user->roles->pluck('name')->first() : 'N/A'); ?></td>
                                    <td>
                                        <?php if($user->status == 0): ?>
                                            <span class="badge badge-danger">Inactive</span>
                                        <?php elseif($user->status == 1): ?>
                                            <span class="badge badge-success">Active</span>
                                        <?php endif; ?>
                                    </td>
                                    <td style="display: flex">
                                        <?php if($user->status == 0): ?>
                                            <a href="<?php echo e(route('users.status', ['user_id' => $user->id, 'status' => 1])); ?>"
                                                class="btn btn-success m-2">
                                                <i class="fa fa-check"></i>
                                            </a>
                                        <?php elseif($user->status == 1): ?>
                                            <a href="<?php echo e(route('users.status', ['user_id' => $user->id, 'status' => 0])); ?>"
                                                class="btn btn-danger m-2">
                                                <i class="fa fa-ban"></i>
                                            </a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('users.edit', ['user' => $user->id])); ?>"
                                            class="btn btn-primary m-2">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <a class="btn btn-danger m-2" href="#" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <?php echo e($users->links()); ?>

                </div>
            </div>
        </div>

    </div>

    <?php echo $__env->make('users.delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wijayatoyota/Documents/techtool-laravel-admin/resources/views/users/index.blade.php ENDPATH**/ ?>