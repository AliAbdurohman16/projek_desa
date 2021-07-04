<main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Aparatur</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li>Aparatur Desa</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team bg-light" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">
                <?php foreach($aparatur as $a) { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="<?= base_url('gambar/pekerja/') . $a->foto; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?= $a->nama_lengkap?></h4>
                            <span><?= $a->jabatan?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?= $this->pagination->create_links(); ?>

        </div>

    </section><!-- End Team Section -->


</main><!-- End #main -->