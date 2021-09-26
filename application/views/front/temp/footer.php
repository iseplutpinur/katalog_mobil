</main>
<!-- footer area start  -->
<footer>
    <div class="copyright-area st-2">
        <div class="container">
            <div class="row wow fadeInUp align-items-center">
                <div class="d-md-flex copyright-text">
                    <div class="p-2 flex-grow-1 copyright-text">
                        <div class="copyright-text st-2">
                            <?= $attr['copyright_status'] == 1 ? $attr['copyright_value'] : ''; ?>
                        </div>
                    </div>
                    <?php if ($attr['no_telp_status'] == 1) : ?>
                        <div class="p-2 copyright-text">
                            <i class="fas fa-phone-alt"></i> <span><a class="text-white" href="#"><?= $attr['no_telp_value']; ?></a></span>
                        </div>
                    <?php endif; ?>
                    <?php if ($attr['foot_email_status'] == 1) : ?>
                        <div class="p-2 copyright-text">
                            <i class="fas fa-phone-alt"></i> <span><a class="text-white" href="mailto:<?= $attr['foot_email_value']; ?>"><?= $attr['foot_email_value']; ?></a></span>
                        </div>
                    <?php endif; ?>
                    <?php if ($attr['alamat_status'] == 1) : ?>
                        <div class="p-2 copyright-text">
                            <i class="fas fa-map-marker-alt"></i> <span><a class="text-white" href="#"><?= $attr['alamat_value']; ?></a></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->



<!-- JS here -->
<script src="<?= base_url() ?>assets/growbiz/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/swiper-bundle.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/jquery.meanmenu.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/ajax-form.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/odometer.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/appair.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/plugins.js"></script>
<script src="<?= base_url() ?>assets/growbiz/js/main.js"></script>
</body>

</html>