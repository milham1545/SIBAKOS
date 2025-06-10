

<?php $__env->startSection('containerAdmin'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Pendapatan</div>
                                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $reservation->jasa == 'Potong Rambut' ? $total += 15000 : $total += 25000 ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?php echo e($total); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Layanan Favorit</div>
                                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $reservation->jasa == 'Potong Rambut' ? $favorit1 += 1 : $favorit2 += 1 ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php if($favorit1 > $favorit2): ?>
                                Potong Rambut
                            <?php else: ?>
                                Paket Lengkap (Potong Rambut + Hairtonic)
                            <?php endif; ?></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Order
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $jumlah += 1 ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($jumlah); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    
    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Hi, <?php echo e(auth()->user()->name); ?>!
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        Selamat datang di halaman admin website SIBAKOS!
                    </p>
                    
                </div>
            </div>
        </div>

        
    </div>

</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11 - backup\resources\views/admin/profil.blade.php ENDPATH**/ ?>