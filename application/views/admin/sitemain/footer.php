    <!-- End of Page Content -->
    </div>

    <!-- End of Main Content -->
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Isep Lutpi Nur <?= date('Y'); ?></span>
            </div>
        </div>
        <!-- End of Footer -->
    </footer>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url(); ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/clock.js"></script>
    <!-- Custom scripts for all pages-->
    <?php if (isset($plugins)) : ?>
        <?php if (is_array($plugins)) : ?>
            <?php foreach ($plugins as $plugin) : ?>
                <?php if ($plugin == 'datatable') : ?>
                    <!-- Page level plugins -->
                    <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
                <?php endif ?>
                <?php if ($plugin == 'ckeditor') : ?>
                    <!-- Page level plugins -->
                    <script src="<?= base_url(); ?>assets/vendor/ckeditor5-build-classic/ckeditor.js"></script>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>
    <?php endif ?>
    <script>
        <?php if (isset($javascript)) {
            if (file_exists(VIEWPATH . "$javascript.js")) {
                $this->load->view("$javascript.js");
            }
        } ?>

        $('#<?= isset($nav_select) ? $nav_select : 'nav-dashboard' ?>').addClass('active');
    </script>
    </body>

    </html>