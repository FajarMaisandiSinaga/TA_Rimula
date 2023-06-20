

<?php $__env->startSection('content'); ?>    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor BPJS</th>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pasiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($pasien->pasien_nomor_bpjs); ?></td>
                                <td><?php echo e($pasien->pasien_nama); ?></td>
                                <td><a href="<?php echo e(url('pasiens/' . $pasien->pasien_nik)); ?>"><?php echo e($pasien->pasien_nik); ?></a></td>
                                <td><?php echo e($pasien->pasien_umur); ?></td>
                                <td><?php echo e($pasien->pasien_jenis_kelamin); ?></td>
                                <td>$320,800</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FrontEnd\TA_Rimula\FrontEnd_Admin\resources\views/dashboard/index.blade.php ENDPATH**/ ?>