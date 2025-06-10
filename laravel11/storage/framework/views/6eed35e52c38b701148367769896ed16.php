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
  
  <!-- Page Title -->
  <div class="page-title dark-background" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Katalog Potongan Rambut</h1>
              <p class="mb-0">Berikan tampilan menarik bagi rambut Anda agar dapat tampil lebih rapih dan percaya diri.</p>
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
        <h2>MODEL RAMBUT</h2>
        <div><span>Cek Model Rambut</span> <span class="description-title">Terbaru Kami</span></div>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up">
        <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem; margin-bottom: 20px;">
                    <!-- Menampilkan gambar -->
                    <img class="card-img-top" src="/assets/img/gambar-rambut/<?php echo e($catalog['gambar_rambut']); ?>" >
                    <div class="card-body">
                        <!-- Menampilkan judul  -->
                        <h5 class="card-title"><?php echo e($catalog['nama_rambut']); ?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div>      
                <p class="font-semibold text-xl my-4">Data tidak ada</p>
            </div>
        <?php endif; ?>
        </div>

        <div class="pesan-container text-center mt-4" data-aos="fade-up" data-aos-delay="500">
          <a href="Order.php" class="btn pesan-button" style="--clr:#151C24"><span>PESAN SEKARANG</span><i></i></a>
        </div>
      </div>

    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11\resources\views/catalogs.blade.php ENDPATH**/ ?>