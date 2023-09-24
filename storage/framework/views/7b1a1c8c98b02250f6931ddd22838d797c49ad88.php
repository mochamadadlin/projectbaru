<!DOCTYPE html>
<html lang="en">


<?php echo $__env->make('common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo $__env->make('common.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php echo $__env->make('common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php echo $__env->yieldContent('content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php echo $__env->make('common.logout-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>


    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('admin/js/sb-admin-2.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH /Users/wijayatoyota/Documents/techtool-laravel-admin/resources/views/layouts/app.blade.php ENDPATH**/ ?>