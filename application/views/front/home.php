<!-- hero area start  -->
<section class="hero-area p-relative">
    <div class="slider-active swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($sliders as $slider) : ?>
                <div class="single-slider slider-height st-2 swiper-slide slider-overlay" data-swiper-autoplay="5000">
                    <div class="slide-bg" data-background="<?= base_url("files/home/{$slider['url']}") ?>"></div>
                    <div class="banner3-shape">
                        <img src="<?= base_url() ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="hero-content text-center">
                                    <p data-animation="fadeInUp" data-delay=".3s"><?= $slider['detail']; ?></p>
                                    <h1 data-animation="fadeInUp" data-delay=".5s"><?= $slider['sub_detail']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- hero area end -->
<!-- choosing area start  -->
<div class="choosing-fl-area">
    <div class="container-fluid choosing-container-2">
        <div class="row wow fadeInUp align-items-center">
            <div class="col-lg-6">
                <div class="choosing-fl-img p-relative text-center">
                    <img src="<?= base_url() ?>assets/growbiz/img/konten/mitsubishimalang052niioiaDm192114gef9cee8.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choosing-fl-right mt-40 mb-40">
                    <div class="section-title mb-30">
                        <div class="border-left st-3">
                            <p>Dealer Mitsubishi Malang</p>
                        </div>
                        <h4 class="white-color">Dapatkan Semua Informasi Lengkap Mobil Baru Mitsubishi Disini:
                        </h4>
                    </div>
                    <div class="choosing__information st-2">
                        <ul>
                            <li>
                                <div class="choosing__number">
                                    <span>01</span>
                                </div>
                                <div class="choosing__text">
                                    <h5>Pembelian Tunai atau Kredit</h5>
                                </div>
                            </li>
                            <li>
                                <div class="choosing__number">
                                    <span>02</span>
                                </div>
                                <div class="choosing__text">
                                    <h5>Program Promo Dealer</h5>
                                </div>
                            </li>
                            <li>
                                <div class="choosing__number">
                                    <span>03</span>
                                </div>
                                <div class="choosing__text">
                                    <h5>Simulasi/Perhitungan Paket Kredit Murah</h5>
                                </div>
                            </li>
                            <li>
                                <div class="choosing__number">
                                    <span>04</span>
                                </div>
                                <div class="choosing__text">
                                    <h5>Daftar Harga Terbaik</h5>
                                </div>
                            </li>
                            <li>
                                <div class="choosing__number">
                                    <span>05</span>
                                </div>
                                <div class="choosing__text">
                                    <h5>Test Drive</h5>
                                </div>
                            </li>
                            <li>
                                <div class="choosing__number">
                                    <span>06</span>
                                </div>
                                <div class="choosing__text">
                                    <h5>Tukar Tambah</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div class="section-title mb-30">
                        <div class="border-left st-3">
                            <p>Proses Pembelian Bisa Dilakukan Dirumah Tanpa Keluar Rumah, Diproses Cepat, Mudah
                                dan Aman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choosing area end -->
<!-- blog area start  -->
<section class="blog-area blog-area-2 pt-120">
    <div class="container">
        <div class="row wow fadeInUp justify-content-center counter-head">
            <div class="col-lg-6 col-md-8">
                <div class="blog-left">
                    <div class="section-title mb-55 text-center">
                        <div class="border-c-bottom st-2">
                            <p>Katalog Promo</p>
                        </div>
                        <h4>Informasi Program Promo September 2021 Pembelian Mobil Baru Mitsubishi</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <?php foreach ($products as $product) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-single mb-30 p-relative p-3 st-2">
                        <div class="blog-img">
                            <a href="<?= base_url("mobil/{$product['id']}") ?>"><img src="<?= base_url("files/produk/{$product['foto']}") ?>" alt="<?= $product['title']; ?>"></a>
                        </div>
                        <div class="blog-content st-2">
                            <h4><a href="<?= base_url("mobil/{$product['id']}") ?>"><?= $product['title']; ?> <i class="fas fa-arrow-right"></i></a></h4>
                            <ul>
                                <li>Harga mulai <b>Rp <?= $product['harga_mulai'] ?></b></li>
                                <li>Kredit mulai <b>Rp <?= $product['paket_kredit'] ?></b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- blog area end -->
<!-- blog area start  -->
<section class="blog-area blog-area-2 pt-120">
    <div class="container">
        <div class="row wow fadeInUp justify-content-center counter-head">
            <div class="col-lg-6 col-md-8">
                <div class="blog-left">
                    <div class="section-title mb-55 text-center">
                        <div class="border-c-bottom st-2">
                            <p>Galeri Foto</p>
                        </div>
                        <h4>Informasi Video Presentasi Terbaru serta Galeri Foto Mobil Baru Mitsubishi</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <?php foreach ($galeris as $galeri) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single mb-30 p-relative st-2">
                        <div class="blog-img">
                            <a href="#"><img src="<?= base_url("files/galeri/{$galeri['foto']}") ?>" alt="<?= $galeri['title']; ?>"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- blog area end -->