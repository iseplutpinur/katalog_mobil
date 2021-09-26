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
<!-- blog area start  -->
<?php if ($products != null) : ?>
    <section class="blog-area blog-area-2 pt-120 <?= getBgColor() ?>">
        <div class="container">
            <div class="row wow fadeInUp align-items-center counter-head">
                <div class="col-md-12">
                    <div class="portfolio-left">
                        <div class="section-title mb-55">
                            <div class="border-left">
                                <p>Katalog Promo</p>
                            </div>
                            <h3>Informasi Program Promo September 2021 Pembelian Mobil Baru Mitsubishi</h3>
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