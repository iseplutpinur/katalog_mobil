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
<!-- hero area start  -->
<?php if ($sliders != null) : ?>
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
<?php endif; ?>
<!-- hero area end -->
<!-- choosing area start  -->
<?php if ($jumbotrons != null) : ?>
    <?php foreach ($jumbotrons as $jumbotron) : ?>
        <div class="choosing-fl-area">
            <div class="container-fluid choosing-container-2">
                <div class="row wow fadeInUp align-items-center">
                    <div class="col-lg-6">
                        <div class="choosing-fl-img p-relative text-center">
                            <img src="<?= base_url("files/jumbotron/{$jumbotron['url']}") ?>" alt="<?= $jumbotron['text'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choosing-fl-right mt-40 mb-40">
                            <div class="section-title mb-30">
                                <div class="border-left st-3">
                                    <p><?= $jumbotron['text'] ?></p>
                                </div>
                                <h4 class="white-color"><?= $jumbotron['sub_judul'] ?>
                                </h4>
                            </div>
                            <div class="choosing__information st-2">
                                <?= $jumbotron['detail'] ?>
                            </div>
                            <br>
                            <div class="section-title mb-30">
                                <div class="border-left st-3">
                                    <p><?= $jumbotron['sub_detail'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<!-- choosing area end -->

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

<!-- galeri -->
<?php if ($galeris != null) : ?>
    <section class="portfolio-area <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p><?= $attr['galeri_title']; ?></p>
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
                        <?php foreach ($galeris as $galeri) : ?>
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
<?php if ($videos != null) : ?>
    <section class="portfolio-area <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p><?= $attr['video_title']; ?></p>
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
                        <?php foreach ($videos as $video) : ?>
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

<!-- blog area end -->
<?php if ($testimoni != null) : ?>
    <section class="testimonial-area st-3 <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-md-8">
                    <div class="section-title mb-55 ">
                        <div class="border-left st-3">
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

<div class="counter-board-area" data-background="assets/img/bg/counter-board-bg.jpg">
            <div class="container">
                <div class="row wow fadeInUp align-items-center counter-head text-center">
                    <div class="counter">
                        <div class="section-title mb-60">
                            <h2 class="white-color ">Statistik Kunjungan</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp counter-board-content">
                    <div class="col-md-4 col-sm-12">
                        <div class="counter-board-single mb-40">
                            <div class="counter-board-number"><span class="odometer" data-count="<?= $visited['hari'] ?>">00</span></div>
                            <p>Hari Ini</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="counter-board-single mb-40">
                            <div class="counter-board-number"><span class="odometer" data-count="<?= $visited['minggu'] ?>">00</span></div>
                            <p>Minggu Ini</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="counter-board-single mb-40">
                            <div class="counter-board-number"><span class="odometer" data-count="<?= $visited['bulan'] ?>">00</span></div>
                            <p>Total Kunjungan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>