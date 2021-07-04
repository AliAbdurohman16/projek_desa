<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Artikel</h2>

                <ol>
                    <li><a href="<?= base_url();?>">Beranda</a></li>
                    <li><a href="<?= base_url('berita');?>">Berita</a></li>
                    <li>Artikel</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog bg-light">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">
                    <?php if (count($artikel) == 0) { ?>
                    <center>
                        <h3 class="mt-5">Artikel Tidak Ditemukan.</h3>
                    </center>
                    <?php } ?>

                    <?php foreach($artikel as $a) { ?>

                    <article class="entry entry-single bg-white" data-aos="fade-up">

                        <div class="entry-img">
                            <?php if ($a->artikel_sampul != "") { ?>
                            <img src=" <?= base_url('gambar/artikel/') . $a->artikel_sampul; ?>"
                                alt="<?= $a->artikel_judul; ?>" class="img-fluid" width="100%">
                            <?php } ?>
                        </div>

                        <h2 class="entry-title">
                            <a href="<?= base_url() . $a->artikel_slug; ?>"><?= $a->artikel_judul; ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                        href=""><?= $a->pengguna_nama; ?></a></li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="">
                                        <time"><?= date('d-M-Y', strtotime($a->artikel_tanggal)); ?></time>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center"><i class="icofont-tags"></i> <a
                                        href="<?= base_url('kategori/') . $a->kategori_slug; ?>"><?= $a->kategori_nama; ?></a>
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <?= $a->artikel_konten; ?>
                        </div>

                    </article><!-- End blog entry -->
                    <?php } ?>

                </div><!-- End blog entries list -->

                <?php $this->load->view('frontend/v_sidebar'); ?>

            </div><!-- End row -->

        </div><!-- End container -->


    </section>
    <!-- End Blog Section -->
</main><!-- End #main -->