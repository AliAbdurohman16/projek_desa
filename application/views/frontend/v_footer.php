    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Tentang</h4>
                        <p><?= $pengaturan->tentang; ?></p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Kontak</h4>
                        <p>
                            <strong>Alamat:</strong> <?= $pengaturan->alamat; ?> <br>
                            <strong>Telepon:</strong> <a
                                href="tel://<?= $pengaturan->telepon; ?>"><?= $pengaturan->telepon ?></a><br>
                            <strong>Email:</strong> <a
                                href="mailto:<?= $pengaturan->email; ?>"><?= $pengaturan->email ?></a><br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita'); ?>">Berita</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="<?= base_url('page/profil-desa-ciuyah'); ?>">profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="<?= base_url('page/visi-dan-misi'); ?>">visi dan misi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Peta</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7754041566823!2d108.6767046141447!3d-6.91743326962476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f0fe640b67465%3A0x34fd01cc37280795!2sBalai%20Desa%20Ciuyah!5e0!3m2!1sid!2sid!4v1613137441154!5m2!1sid!2sid"
                            width="100%" height="70%" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                        </span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
                    Designed by <?= $pengaturan->nama; ?>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="<?= $pengaturan->youtube; ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="<?= $pengaturan->facebook; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?= $pengaturan->instagram; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets_frontend/'); ?>assets/vendor/counterup/counterup.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets_frontend/'); ?>assets/js/main.js"></script>

    <script>
$(function() {
    $('#nav a[href~="' + location.href + '"]').parents('li').addClass('active');
});

$('img').css('max-width', '100%');
$('iframe').css('max-width', '100%');
    </script>

    </body>

    </html>
