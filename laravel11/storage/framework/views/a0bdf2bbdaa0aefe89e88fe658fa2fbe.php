

<?php $__env->startSection('containerAdmin'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Katalog</h1>

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
            <a href="/admin/catalog/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table
                    class="table table-bordered"
                    id="dataTable"
                    width="70%"
                    cellspacing="0"
                >
                    <thead>
                        <tr>
                            <th>Gambar Rambut</th>
                            <th>Nama Rambut</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gambar Rambut</th>
                            <th>Nama Rambut</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <tr>
                                <td>
                                    <img src="<?php echo e(asset('storage').'/'.$catalog->gambar_rambut); ?>" class="img-thumbnail img-fluid" style="width: 7rem"/>
                                </td>
                                <td><?php echo e($catalog->nama_rambut); ?></td>
                                <td>
                                    <a href="/admin/catalog/<?php echo e($catalog->id); ?>/edit" class="btn btn-warning"><i class="fas fa-pen fa-sm text-white-50"></i></a>
                                    <form action="/admin/catalog/<?php echo e($catalog->id); ?>" method="post" class="d-inline">
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
<?php echo $__env->make('admin.layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11 - backup\resources\views/admin/catalog/index.blade.php ENDPATH**/ ?>