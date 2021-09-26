<!-- portfolio details area start  -->
<section class="portfolio-details-area pt-150 pb-80">
    <div class="container">
        <div class="portfolio-details-content">
            <div class="portfolio-details-img">
                <div class="row wow fadeInUp">
                    <div class="col-lg-12">
                        <div class="portfolio-details-img-left">
                            <div class="portfolio-details-single-img">
                                <img src="<?= base_url("files/produk/{$mobil['produk']['jumbotron_foto']}") ?>" alt="<?= $mobil['produk']['title']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <h5 class="mb-15"><?= $mobil['produk']['title']; ?></h5>
                    <p class="mb-40"><?= $mobil['produk']['jumbotron_detail']; ?></p>
                    <h5 class="mb-20"><?= $mobil['produk']['promo_title']; ?></h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">*</th>
                                <td>Harga mulai</td>
                                <td>:</td>
                                <td>Rp <b><?= $mobil['produk']['promo_harga_mulai']; ?></b></td>
                            </tr>
                            <tr>
                                <th scope="row">*</th>
                                <td>Paket Kredit</td>
                                <td>:</td>
                                <td>Rp <b><?= $mobil['produk']['promo_paket_kredit']; ?></b></td>
                            </tr>
                            <tr>
                                <th scope="row">*</th>
                                <td>Tenor Kredit</td>
                                <td>:</td>
                                <td><b><?= $mobil['produk']['promo_tenor_kerdit']; ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mb-40"><?= $mobil['produk']['promo_detail']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- portfolio details area end -->
<!-- blog area start  -->
<?php if ($mobil['daftar_harga'] != null) : ?>
    <section class="blog-area blog-area-2 pt-120">
        <div class="container">
            <div class="row wow fadeInUp justify-content-center counter-head">
                <div class="col-lg-6 col-md-8">
                    <div class="blog-left">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom st-2">
                                <p>Daftar Harga <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-single mb-30 p-relative st-2">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">TIPE</th>
                                    <th scope="col">HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mobil['daftar_harga'] as $harga) : ?>
                                    <tr>
                                        <td><?= $harga['title']; ?></td>
                                        <td>Rp. <?= $harga['harga']; ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>

<!-- blog area end -->
<!-- blog area start  -->
<!-- eksterior -->
<?php if ($mobil['eksterior'] != null) : ?>
    <section class="blog-area blog-area-2 pt-120">
        <div class="container">
            <div class="row wow fadeInUp justify-content-center counter-head">
                <div class="col-lg-6 col-md-8">
                    <div class="blog-left">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom st-2">
                                <p>Eksterior <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <?php foreach ($mobil['eksterior'] as $eksterior) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-single mb-30 p-relative st-2">
                            <div class="blog-img">
                                <a href="#"><img src="<?= base_url("files/eksterior/{$eksterior['foto']}") ?>" alt="<?= $eksterior['title']; ?>"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- blog area end -->

<!-- blog area start  -->
<!-- eksterior -->
<?php if ($mobil['interior'] != null) : ?>
    <section class="blog-area blog-area-2 pt-120">
        <div class="container">
            <div class="row wow fadeInUp justify-content-center counter-head">
                <div class="col-lg-6 col-md-8">
                    <div class="blog-left">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom st-2">
                                <p>Interior <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <?php foreach ($mobil['interior'] as $interior) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-single mb-30 p-relative st-2">
                            <div class="blog-img">
                                <a href="#"><img src="<?= base_url("files/interior/{$interior['foto']}") ?>" alt="<?= $interior['title']; ?>"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- blog area end -->

<!-- blog area start  -->
<!-- eksterior -->
<?php if ($mobil['galeri'] != null) : ?>
    <section class="blog-area blog-area-2 pt-120">
        <div class="container">
            <div class="row wow fadeInUp justify-content-center counter-head">
                <div class="col-lg-6 col-md-8">
                    <div class="blog-left">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom st-2">
                                <p>galeri <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <?php foreach ($mobil['galeri'] as $galeri) : ?>
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
<?php endif; ?>
<!-- blog area end -->

<?php if ($mobil['produk']['informasi_spesifikasi_status'] == 1) : ?>
    <!-- blog area end -->
    <section class="blog-area blog-area-2 pt-120">
        <div class="container">
            <div class="row wow fadeInUp justify-content-center counter-head">
                <div class="col-lg-6 col-md-8">
                    <div class="blog-left">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom st-2">
                                <p>Informasi Spesifikasi <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-single mb-30">
                        <?= $mobil['produk']['informasi_spesifikasi']; ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($mobil['produk']['keterangan_pembelian_status'] == 1) : ?>
    <!-- blog area end -->
    <section class="blog-area blog-area-2 pt-120">
        <div class="container">
            <div class="row wow fadeInUp justify-content-center counter-head">
                <div class="col-lg-6 col-md-8">
                    <div class="blog-left">
                        <div class="section-title mb-55 text-center">
                            <div class="border-c-bottom st-2">
                                <p>Keterangan Pembelian <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-single mb-30">
                        <?= $mobil['produk']['keterangan_pembelian']; ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>

<!-- blog area end -->
<!-- blog area start  -->
<section class="blog-area blog-area-2 pt-120">
    <div class="container">
        <div class="row wow fadeInUp justify-content-center counter-head">
            <div class="col-lg-6 col-md-8">
                <div class="blog-left">
                    <div class="section-title mb-55 text-center">
                        <div class="border-c-bottom st-2">
                            <p>Mobil Baru Mitsubishi Lainnya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <div class="col-lg-4 col-md-6">
                <div class="blog-single mb-30 p-relative st-2">
                    <div class="blog-img">
                        <a href="<?= base_url() ?>produk/detail/NewXpander"><img src="<?= base_url() ?>assets/growbiz/img/konten/mitsubishimalang02ua0iDrM76huiamci04064670c9b.jpg" alt=""></a>
                    </div>
                    <div class="blog-content st-2">
                        <h4><a href="<?= base_url() ?>produk/detail/NewXpander">NEW XPANDER <i class="fas fa-arrow-right"></i></a></h4>
                        <ul>
                            <li>Harga mulai <b>Rp 232.200.000</b></li>
                            <li>Kredit mulai <b>Rp 30 Jutaan</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-single mb-30 p-relative st-2">
                    <div class="blog-img">
                        <a href="<?= base_url() ?>produk/detail/NewXpander"><img src="<?= base_url() ?>assets/growbiz/img/konten/mitsubishimalang02ucimaab7s82irM3a040646ac91b.jpg" alt=""></a>
                    </div>
                    <div class="blog-content st-2">
                        <h4><a href="<?= base_url() ?>produk/detail/NewXpander">NEW XPANDER <i class="fas fa-arrow-right"></i></a></h4>
                        <ul>
                            <li>Harga mulai <b>Rp 232.200.000</b></li>
                            <li>Kredit mulai <b>Rp 30 Jutaan</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-single mb-30 p-relative st-2">
                    <div class="blog-img">
                        <a href="<?= base_url() ?>produk/detail/NewXpander"><img src="<?= base_url() ?>assets/growbiz/img/konten/mitsubishimalang02uhasimor2byMias5040646810de.jpg" alt=""></a>
                    </div>
                    <div class="blog-content st-2">
                        <h4><a href="<?= base_url() ?>produk/detail/NewXpander">NEW XPANDER <i class="fas fa-arrow-right"></i></a></h4>
                        <ul>
                            <li>Harga mulai <b>Rp 232.200.000</b></li>
                            <li>Kredit mulai <b>Rp 30 Jutaan</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-single mb-30 p-relative st-2">
                    <div class="blog-img">
                        <a href="<?= base_url() ?>produk/detail/NewXpander"><img src="<?= base_url() ?>assets/growbiz/img/konten/mitsubishimalang02ua0iDrM76huiamci04064670c9b.jpg" alt=""></a>
                    </div>
                    <div class="blog-content st-2">
                        <h4><a href="<?= base_url() ?>produk/detail/NewXpander">NEW XPANDER <i class="fas fa-arrow-right"></i></a></h4>
                        <ul>
                            <li>Harga mulai <b>Rp 232.200.000</b></li>
                            <li>Kredit mulai <b>Rp 30 Jutaan</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-single mb-30 p-relative st-2">
                    <div class="blog-img">
                        <a href="<?= base_url() ?>produk/detail/NewXpander"><img src="<?= base_url() ?>assets/growbiz/img/konten/mitsubishimalang02ucimaab7s82irM3a040646ac91b.jpg" alt=""></a>
                    </div>
                    <div class="blog-content st-2">
                        <h4><a href="<?= base_url() ?>produk/detail/NewXpander">NEW XPANDER <i class="fas fa-arrow-right"></i></a></h4>
                        <ul>
                            <li>Harga mulai <b>Rp 232.200.000</b></li>
                            <li>Kredit mulai <b>Rp 30 Jutaan</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-single mb-30 p-relative st-2">
                    <div class="blog-img">
                        <a href="<?= base_url() ?>produk/detail/NewXpander"><img src="<?= base_url() ?>assets/growbiz/img/konten/mitsubishimalang02uhasimor2byMias5040646810de.jpg" alt=""></a>
                    </div>
                    <div class="blog-content st-2">
                        <h4><a href="<?= base_url() ?>produk/detail/NewXpander">NEW XPANDER <i class="fas fa-arrow-right"></i></a></h4>
                        <ul>
                            <li>Harga mulai <b>Rp 232.200.000</b></li>
                            <li>Kredit mulai <b>Rp 30 Jutaan</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->