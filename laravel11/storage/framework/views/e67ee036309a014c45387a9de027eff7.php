<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
      <!-- Page Title -->
      <div class="page-title dark-background" data-aos="fade">
        <div class="heading">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Pemesanan Jasa Potong Rambut</h1>
              </div>
            </div>
          </div>
        </div>
        <nav class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="Beranda.html">Home</a></li>
              <li class="current">Katalog</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->
  
      <!-- Starter Section Section -->
      <section id="starter-section" class="starter-section section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>ORDER JASA</h2>
          <div><span>Formulir</span> <span class="description-title">Pemesanan Jasa</span></div>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up">
          <form method="post" action="/reservation">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="cth. Risco Aditama" name="nama_pelanggan" required value="<?php echo e(old('nama_pelanggan')); ?>">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control" placeholder="cth. 08123456789" name="no_hp" required value="<?php echo e(old('no_hp')); ?>"> 
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Alamat Rumah</label>
                  <textarea class="form-control" rows="3" name="alamat" required value="<?php echo e(old('alamat')); ?>"></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                  <input type="datetime-local" class="form-control" name="tanggal_waktu_reservasi" required value="<?php echo e(old('tanggal_waktu_reservasi')); ?>">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Jasa</label>
                  <select class="form-select" aria-label="Default select example" name="jasa" required>
                    <option selected>Pilih Jasa</option>
                    <option value="Potong Rambut">Potong Rambut</option>
                    <option value="Potong Rambut + Hairtonic">Potong Rambut + Hairtonic</option>
                  </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Pesan Reservasi</button>
              </div>
            </div>
          </form>
        </div>
  
      </section><!-- /Starter Section Section -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11 - backup\resources\views/reservation.blade.php ENDPATH**/ ?>