

<?php $__env->startSection('containerAdmin'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Reservasi</h1>

    <?php if(session()->has('success')): ?>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-1">
                    <div class="card-body py-3">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase">
                                    <?php echo e(session('success')); ?>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/admin/reservation/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                >
                    <thead>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Tanggal & Waktu</th>
                            <th>Jasa</th>
                            <th>Referensi Gaya Rambut</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Tanggal & Waktu</th>
                            <th>Jasa</th>
                            <th>Referensi Gaya Rambut</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <tr>
                                <td><?php echo e($reservation->nama_pelanggan); ?></td>
                                <td><?php echo e($reservation->no_hp); ?></td>
                                <td><?php echo e($reservation->alamat); ?></td>
                                <td><?php echo e(date('l, j F Y H:i', strtotime($reservation->tanggal_waktu_reservasi))); ?></td>
                                <td><?php echo e($reservation->jasa); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('storage').'/'.$reservation->gambar_referensi); ?>" class="img-thumbnail img-fluid" style="width: 7rem"/>
                                </td>
                                <td>
                                    <a href="/admin/reservation/<?php echo e($reservation->id); ?>/edit" class="btn btn-warning"><i class="fas fa-pen fa-sm text-white-50"></i></a>
                                    <form action="/admin/reservation/<?php echo e($reservation->id); ?>" method="post" class="d-inline">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapusnya?')"><i class="fas fa-trash fa-sm text-white-50"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11 - backup\resources\views/admin/reservation/index.blade.php ENDPATH**/ ?>