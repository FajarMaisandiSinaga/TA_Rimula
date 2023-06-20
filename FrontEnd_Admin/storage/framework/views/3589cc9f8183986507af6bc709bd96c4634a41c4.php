

<?php $__env->startSection('content'); ?>    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php echo e($pasien->pasien_nama); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FrontEnd\TA_Rimula\FrontEnd_Admin\resources\views/dashboard/detail.blade.php ENDPATH**/ ?>