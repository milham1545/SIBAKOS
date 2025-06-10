

<?php $__env->startSection('containerAdmin'); ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit data</h1>
    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="/admin/catalog/<?php echo e($catalog->id); ?>" enctype="multipart/form-data">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Nama Rambut</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['nama_rambut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_rambut" autofocus value="<?php echo e(old('nama_rambut', $catalog->nama_rambut)); ?>"/>
                            <?php $__errorArgs = ['nama_rambut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="image">Referensi Gaya Rambut</label>
                            <input type="hidden" name="oldGambar" value="<?php echo e($catalog->gambar_rambut); ?>">
                            <?php if($catalog->gambar_rambut): ?>
                                <img src="<?php echo e(asset('storage').'/'.$catalog->gambar_rambut); ?>" class="img-preview img-fluid mb-3 px-0 col-sm-5 d-block"/>
                            <?php else: ?>
                                <img class="img-preview img-fluid mb-3 px-0 col-sm-5"/>
                            <?php endif; ?>
                            
                            <input type="file" class="form-control-file <?php $__errorArgs = ['gambar_rambut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" name="gambar_rambut" onchange="previewImage()"/>
                            <?php $__errorArgs = ['gambar_rambut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/admin/reservation" class="btn btn-secondary">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script>

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11 - backup\resources\views/admin/catalog/edit.blade.php ENDPATH**/ ?>