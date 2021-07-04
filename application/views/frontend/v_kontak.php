<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kontak</h2>
                <ol>
                    <li><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li>Kontak</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->


    <section id="contact" class="contact">
        <div class="container">

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="icofont-google-map"></i>
                                <h4>Alamat:</h4>
                                <p><?= $pengaturan->alamat; ?></p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:<?= $pengaturan->email; ?>">
                                        <?= $pengaturan->email; ?>
                                    </a></p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <h4>Telepon:</h4>
                                <p><a href="tel://<?= $pengaturan->telepon; ?>">
                                        <?= $pengaturan->telepon; ?>
                                    </a></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="info-wrap">
                        <form action="<?= base_url('welcome/pesan_aksi'); ?>" method="post">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"
                                        required>
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek"
                                    required>
                                <?= form_error('subjek', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="pesan" placeholder="Isi Masukkan atau Pesan"
                                    required></textarea>
                                <?= form_error('pesan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="text-center"><button class="btn" style="background: #fd5c28; color: white;"
                                    type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->





</main><!-- End #main -->