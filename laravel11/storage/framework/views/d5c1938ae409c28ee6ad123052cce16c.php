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
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">
    
        <div class="container">
            <div class="row gy-4 justify-content-between">
            <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
    
            <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                <h1>Gaya Rambut Keren <br/><span>Percaya Diri Maksimal</span></h1>
                <p>Koko salon memberikan hasil potongan rambut yang anda inginkan secara maksimal dan tetap dengan potongan rapih yang mereka tawarkan. Buat rambut yang anda inginkan sekarang!</p>
                <div class="d-flex">
                <a href="/reservation" class="btn" style="--clr:#39FF14"><span>PESAN SEKARANG</span><i></i></a>
                <a href="/catalogs" class="btn" style="--clr:#0FF0FC"><span>Lihat Katalog</span><i></i></a>
                </div>
            </div>
    
            </div>
        </div>
    
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>
        </section><!-- /Hero Section -->
    
        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">
    
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Harga</h2>
                <div><span>Layanan</span> <span class="description-title">Kami</span></div>
            </div><!-- End Section Title -->
        
            <div class="container">
        
                <div class="row gy-4">
        
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pricing-item">
                    <h3>Potong Rambut</h3>
                    <p class="description">Potong rambut biasa tanpa ada layanan tambahan lain.</p>
                    <h4><sup>Rp</sup>15.000<span> / potong rambut</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Potongan rambut rapih</span></li>
                        <li><i class="bi bi-check"></i> <span>Potongan rambut sesuai keinginan</span></li>
                        <li><i class="bi bi-check"></i> <span>Konsultasi Gaya Rambut</span></li>
                        <li><i class="bi bi-check"></i> <span>Efisiensi Waktu</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Layanan Cuci Rambut</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Layanan Pijat Relaksasi dan Hairtonic</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Pengalaman Relaksasi pada Rambut</span></li>
                    </ul>
                    </div>
                </div><!-- End Pricing Item -->
        
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="pricing-item">
                    <h3>Paket Lengkap</h3>
                    <p class="description">Potong rambut dengan pengalaman yang membuat Anda nyaman</p>
                    <h4><sup>Rp</sup>25.000<span> / month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i> <span>Potongan rambut rapih</span></li>
                        <li><i class="bi bi-check"></i> <span>Potongan rambut sesuai keinginan</span></li>
                        <li><i class="bi bi-check"></i> <span>Konsultasi Gaya Rambut</span></li>
                        <li><i class="bi bi-check"></i> <span>Efisiensi Waktu</span></li>
                        <li><i class="bi bi-check"></i></i> <span>Layanan Cuci Rambut</span></li>
                        <li><i class="bi bi-check"></i></i> <span>Layanan Pijat Relaksasi dan Hairtonic</span></li>
                        <li><i class="bi bi-check"></i></i> <span>Pengalaman Relaksasi pada Rambut</span></li>
                    </ul>
                    </div>
                </div><!-- End Pricing Item -->
        
                </div>
                
                <!-- Order Button -->
                <div class="pesan-container text-center mt-4" data-aos="fade-up" data-aos-delay="500">
                    <button class="pesan-arounder" onclick="location.href='/reservation'">PESAN SEKARANG</button>
                </div>
                <!-- End Order Button -->


            </div>
        
        </section><!-- /Pricing Section -->

    
        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">
    
        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">
    
        <div class="container" data-aos="fade-up" data-aos-delay="100">
    
            <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 3500
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                }
                }
            </script>
            <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-icon.jpeg" class="testimonial-img" alt="">
                    <h3>Muhammad Luqman</h3>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Potongan rambutnya bagus dan dibersihkan dengan baik.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-icon.jpeg" class="testimonial-img" alt="">
                    <h3>Zainal Arifin</h3>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Barbershop ini the best! Harga terjangkau tapi kualitasnya gak murahan. Suka sama hasil potongan rambutnya.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-icon.jpeg" class="testimonial-img" alt="">
                    <h3>Salman Khair</h3>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Tempatnya bagus dan rapih, terus kalo misal mau dipanggil ke rumah juga bisa. Mantap pokoknya!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-icon.jpeg" class="testimonial-img" alt="">
                    <h3>Haidar Ridho</h3>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Pelayanannya sangat ramah dan sopan. Saya merasa nyaman saat potong rambut di sini.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-icon.jpeg" class="testimonial-img" alt="">
                    <h3>Indra Gunawan</h3>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Bagus dan rapih potongannya, saya suka.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
    
            </div>
            <div class="swiper-pagination"></div>
            </div>
    
        </div>
    
        </section><!-- /Testimonials Section -->
    
        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">
    
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Detail Status</h2>
                <div><span>Status</span> <span class="description-title">Pelayanan Kami</span></div>
            </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
    
            <div class="row gy-4 justify-content-center">
    
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-emoji-smile"></i>
                <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="154" data-purecounter-duration="1" class="purecounter"></span>
                <p>Konsumen Puas</p>
                </div>
            </div><!-- End Stats Item -->
    
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-alarm"></i>
                <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="657" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jam Kerja (Pelayanan Jasa)</p>
                </div>
            </div><!-- End Stats Item -->
    
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-people"></i>
                <div class="stats-item">
                <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                <p>Karyawan</p>
                </div>
            </div><!-- End Stats Item -->
    
            </div>
    
        </div>
    
        </section><!-- /Stats Section -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\Berkas Kuliah\Tugas Kuliah\Semester 3\Sistem Informasi\WEBSITE BENERAN\laravel11 - backup\resources\views/home.blade.php ENDPATH**/ ?>