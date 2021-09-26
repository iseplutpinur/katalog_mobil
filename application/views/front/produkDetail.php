<?php
function getYoutubeEmbedUrl($url)
{
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id;
}

$bg_counter = 0;
function getBgColor()
{
    global $bg_counter;
    $bg_counter++;
    return $bg_counter % 2 == 0 ? '' : 'grey-bg';
}
?>

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
    <section class="portfolio-area <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p>eksterior <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-inner">
                <div class="swiper-container portfolio-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($mobil['eksterior'] as $eksterior) : ?>
                            <div class="swiper-slide">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
                                        <a href="#"><img src="<?= base_url("files/eksterior/{$eksterior['foto']}") ?>" alt="<?= $eksterior['title']; ?>"></a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="#"><?= $eksterior['title']; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="portfolio-nav">
                        <div class="swiper-button-prev"><i class="far fa-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="far fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- blog area end -->

<!-- blog area start  -->
<!-- interior -->
<?php if ($mobil['interior'] != null) : ?>
    <section class="portfolio-area <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p>Interior <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-inner">
                <div class="swiper-container portfolio-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($mobil['interior'] as $interior) : ?>
                            <div class="swiper-slide">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
                                        <a href="#"><img src="<?= base_url("files/interior/{$interior['foto']}") ?>" alt="<?= $interior['title']; ?>"></a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="#"><?= $interior['title']; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="portfolio-nav">
                        <div class="swiper-button-prev"><i class="far fa-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="far fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- warna -->
<?php if ($mobil['warna'] != null) : ?>
    <section class="portfolio-area <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p>warna <?= $mobil['produk']['title']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-inner">
                <div class="swiper-container portfolio-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($mobil['warna'] as $warna) : ?>
                            <div class="swiper-slide">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
                                        <a href="#"><img src="<?= base_url("files/warna/{$warna['foto']}") ?>" alt="<?= $warna['title']; ?>"></a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="#"><?= $warna['title']; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="portfolio-nav">
                        <div class="swiper-button-prev"><i class="far fa-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="far fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- blog area end -->

<!-- galeri -->
<?php if ($mobil['galeri'] != null) : ?>
    <section class="portfolio-area <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p>Galeri Foto <?= $mobil['produk']['title']; ?></p>
                            </div>
                            <h3><?= $attr['galeri_value']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-inner">
                <div class="swiper-container portfolio-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($mobil['galeri'] as $galeri) : ?>
                            <div class="swiper-slide">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
                                        <a href="#"><img src="<?= base_url("files/galeri/{$galeri['foto']}") ?>" alt="<?= $galeri['title']; ?>"></a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="#"><?= $galeri['title']; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="portfolio-nav">
                        <div class="swiper-button-prev"><i class="far fa-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="far fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- video -->
<?php if ($mobil['video'] != null) : ?>
    <section class="portfolio-area <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p>video <?= $mobil['produk']['title']; ?></p>
                            </div>
                            <h3><?= $attr['video_value']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-inner">
                <div class="swiper-container portfolio-active">
                    <div class="swiper-wrapper">
                        <?php foreach ($mobil['video'] as $video) : ?>
                            <div class="swiper-slide">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
                                        <iframe id="player0" width="400" height="400" src="<?= getYoutubeEmbedUrl($video['url']); ?>" frameborder="0" allowfullscreen iframe-video></iframe>
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="#"><?= $video['title']; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="portfolio-nav">
                        <div class="swiper-button-prev"><i class="far fa-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="far fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($mobil['produk']['informasi_spesifikasi_status'] == 1) : ?>
    <!-- blog area end -->
    <section class="portfolio-area <?= getBgColor() ?>">
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
                    <div class="blog-single mb-30 p-lg-5 p-md-3">
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
    <section class="portfolio-area <?= getBgColor() ?>">
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
                    <div class="blog-single mb-30 p-md-5">
                        <?= $mobil['produk']['keterangan_pembelian']; ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>


<!-- blog area start  -->
<?php if ($products != null) : ?>
    <section class="blog-area blog-area-2 pt-120 <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p><?= $attr['katalog_title']; ?></p>
                            </div>
                            <h3><?= $attr['katalog_value']; ?></h3>
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
<?php endif ?>
<!-- blog area end -->

<!-- blog area end -->
<?php if ($testimoni != null) : ?>
    <section class="testimonial-area st-3 <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-md-8">
                    <div class="section-title mb-55">
                        <div class="border-left">
                            <p><?= $attr['testimoni_title']; ?></p>
                        </div>
                        <h3><?= $attr['testimoni_value']; ?></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-nav-3">
                        <div class="testimonial-btn-prev"><i class="fal fa-angle-left"></i></div>
                        <div class="testimonial-btn-next"><i class="fal fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-12">
                    <div class="testimonial-wrapper p-relative">
                        <div class="swiper-container testimonial-active-3 st-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <?php foreach ($testimoni as $testi) : ?>
                                        <div class="testimonial-single st-3 mb-50">
                                            <ul class="testimonial-review st-3">
                                                <?php for ($i = 0; $i < $testi['nilai']; $i++) : ?>
                                                    <li><i class="fas fa-star"></i></li>
                                                <?php endfor ?>
                                            </ul>
                                            <p><?= $testi['details']; ?></p>
                                            <div class="testimonial-img st-3">
                                                <img src="<?= base_url("files/testimoni/{$testi['foto']}") ?>" alt="">
                                            </div>
                                            <div class="testimonial-name st-3">
                                                <h5><a href="#"><?= $testi['title']; ?></a></h5>
                                                <p><?= $testi['sebagai']; ?></p>
                                            </div>
                                            <div class="testimonial-quote st-3">
                                                <i class="fal fa-quote-right"></i>
                                            </div>
                                        </div>
                                </div>
                            <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- team area start  -->
<?php if ($sales != null) : ?>
    <section class="team-area pt-110 pb-90 <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p><?= $attr['kontak_title']; ?></p>
                            </div>
                            <h3><?= $attr['kontak_value']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <?php foreach ($sales as $sale) : ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member mb-30">
                            <div class="member-img">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $sale['no_wa'] ?>"><img src="<?= base_url("files/sales/{$sale['foto']}") ?>" alt=""></a>
                            </div>
                            <div class="member-name p-relative">
                                <div class="member-name-bg">
                                    <img src="<?= base_url() ?>assets/growbiz/img/shape/member-name-bg.png" alt="">
                                    <img src="<?= base_url() ?>assets/growbiz/img/shape/member-name-c-bg.png" alt="">
                                </div>
                                <h5><a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $sale['no_wa'] ?>"><?= $sale['title'] ?></a></h5>
                                <span>
                                    <p><?= $sale['sebagai'] ?></p>
                                </span>
                                <div class="member-social">
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $sale['no_wa'] ?>"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- team area end  -->