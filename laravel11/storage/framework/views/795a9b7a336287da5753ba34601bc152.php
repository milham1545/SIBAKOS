

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
                    <form method="post" action="/admin/reservation/<?php echo e($reservation->id); ?>" enctype="multipart/form-data">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['nama_pelanggan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_pelanggan" autofocus value="<?php echo e(old('nama_pelanggan', $reservation->nama_pelanggan)); ?>"/>
                            <?php $__errorArgs = ['nama_pelanggan'];
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
                            <label>No. Handphone</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_hp" value="<?php echo e(old('no_hp', $reservation->no_hp)); ?>"/>
                            <?php $__errorArgs = ['no_hp'];
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
                            <label>Alamat Rumah</label>
                            <textarea type="text" class="form-control rows="3" <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamat" ><?php echo e(old('alamat', $reservation->alamat)); ?></textarea>
                            <?php $__errorArgs = ['alamat'];
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
                            <label>Tanggal</label>
                            <input type="datetime-local" class="form-control <?php $__errorArgs = ['tanggal_waktu_reservasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tanggal_waktu_reservasi" value="<?php echo e(old('tanggal_waktu_reservasi', $reservation->tanggal_waktu_reservasi)); ?>"/>
                            <?php $__errorArgs = ['tanggal_waktu_reservasi'];
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
                            <label>Jasa</label>
                            <select class="form-control <?php $__errorArgs = ['jasa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jasa">
                                <option value="Potong Rambut" <?php if(old('jasa', $reservation->jasa) == 'Potong Rambut'): ?> selected <?php endif; ?>>Potong Rambut</option>
                                <option value="Potong Rambut + Hairtonic" <?php if(old('jasa', $reservation->jasa) == 'Potong Rambut + Hairtonic'): ?> selected <?php endif; ?>>Potong Rambut + Hairtonic</option>
                            </select>
                            <?php $__errorArgs = ['jasa'];
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
                            <input type="hidden" name="oldGambar" value="<?php echo e($reservation->gambar_referensi); ?>">
                            <?php if($reservation->gambar_referensi): ?>
                                <img src="<?php echo e(asset('storage').'/'.$reservation->gambar_referensi); ?>" class="img-preview img-fluid mb-3 px-0 col-sm-5 d-block"/>
                            <?php else: ?>
                                <img class="img-preview img-fluid mb-3 px-0 col-sm-5"/>
                            <?php endif; ?>
                            
                            <input type="file" class="form-control-file <?php $__errorArgs = ['gambar_referensi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" name="gambar_referensi" onchange="previewImage()"/>
                            <?php $__errorArgs = ['gambar_referensi'];
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
<?php echo $__env->make('admin.layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11 - backup\resources\views/admin/reservation/edit.blade.php ENDPATH**/ ?>