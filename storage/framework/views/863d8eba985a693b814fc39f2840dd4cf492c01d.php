<?php $__env->startSection('title', 'Import Data Users'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Import Data Users</h1>
        <a href="<?php echo e(route('users.index')); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    
    <?php echo $__env->make('common.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Import Data Users</h6>
        </div>
        <form method="POST" action="<?php echo e(route('users.upload')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    
                    <div class="col-md-12 mb-3 mt-3">
                        <p>Upload Dengan Format CSV / Excel 
                        </p>
                        <a href="<?php echo e(asset('files/Format data user.xlsx')); ?>" target="_blank">Download Format Excel
                        </a>
                    </div>

                    
                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                        <span style="color:red;"></span>File Input</label>
                        <input 
                            type="file" 
                            class="form-control form-control-user <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            id="exampleFile"
                            name="file" 
                            value="<?php echo e(old('file')); ?>">

                        <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Upload Data</button>
                <a class="btn btn-primary float-right mr-3 mb-3" href="<?php echo e(route('users.index')); ?>">Cancel</a>
            </div>
        </form>
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wijayatoyota/Documents/techtool-laravel-admin/resources/views/users/import.blade.php ENDPATH**/ ?>