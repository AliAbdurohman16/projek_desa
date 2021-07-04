<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Halaman</h2>

                <ol>
                    <li><a href="<?= base_url();?>">Beranda</a></li>
                    <li>Halaman</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog bg-light" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 entries">
                    <?php if (count($halaman) == 0) { ?>
                    <center>
                        <h3 class="mt-5">Halaman ini Tidak Ditemukan.</h3>
                    </center>
                    <?php } ?>

                    <?php foreach($halaman as $h) { ?>

                    <article class="entry entry-single bg-white">

                        <h2 class="entry-title">
                            <center>
                                <a href=""><?= $h->halaman_judul; ?></a>
                            </center>
                        </h2>

                        <br />

                        <div class="entry-content">
                            <?php if ($h->halaman_sampul != "") { ?>
                            <img src=" <?= base_url('gambar/kategori/') . $h->halaman_sampul; ?>"
                                alt="<?= $h->halaman_judul; ?>" class="img-fluid" width="100%">
                            <?php } ?>
                            <br />
                            <br />
                            <?= $h->halaman_konten; ?>
                        </div>

                    </article><!-- End blog entry -->
                    <?php } ?>

                </div><!-- End blog entries list -->

            </div><!-- End row -->

        </div><!-- End container -->

    </section><!-- End Blog Section -->

</main><!-- End #main -->
