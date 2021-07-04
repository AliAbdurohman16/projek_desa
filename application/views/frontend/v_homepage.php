  <!-- ======= Hero Section ======= -->
  <section id="hero">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

          <div class="carousel-inner" role="listbox">

              <!-- Slide 1 -->
              <div class="carousel-item active"
                  style="background-image: url(<?= base_url('gambar/bg-image/') . $pengaturan->slider_1 ; ?>);">
                  <div class="carousel-container">
                      <div class="carousel-content animate__animated animate__fadeInUp">
                          <h2>Selamat Datang di <span><?= $pengaturan->nama?></span></h2>
                          <p><?= $pengaturan->slogan_1; ?></p>
                      </div>
                  </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item"
                  style="background-image: url(<?= base_url('gambar/bg-image/') . $pengaturan->slider_2 ; ?>);">
                  <div class="carousel-container">
                      <div class="carousel-content animate__animated animate__fadeInUp">
                          <p><?= $pengaturan->slogan_2; ?></p>
                      </div>
                  </div>
              </div>

              <!-- Slide 3 -->
              <div class="carousel-item"
                  style="background-image: url(<?= base_url('gambar/bg-image/') . $pengaturan->slider_3 ; ?>);">
                  <div class="carousel-container">
                      <div class="carousel-content animate__animated animate__fadeInUp">
                          <p><?= $pengaturan->slogan_3; ?></p>
                      </div>
                  </div>
              </div>

          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>

          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      </div>
  </section>
  <!-- End Hero -->

  <main id="main">

      <!-- ======= About Us Section ======= -->
      <section id="about-us" class="about-us">
          <div class="container">

              <div class="row no-gutters">
                  <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                      data-aos="fade-right"></div>
                  <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                      <div class="content d-flex flex-column justify-content-center">
                          <h3 data-aos="fade-up">Desa Ciuyah</h3>
                          <p data-aos="fade-up">
                              <?= $pengaturan->teks_pembuka; ?>
                          </p>
                          <div class="row">
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-donate-heart"></i>
                                  <h4>Pelayanan Prima</h4>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up">
                                  <i class="bx bx-receipt"></i>
                                  <h4>Transparansi</h4>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                  <i class="bx bx-check-shield"></i>
                                  <h4>Akuntabilitas</h4>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                  <i class="bx bx-medal"></i>
                                  <h4>Utamakan Rakyat</h4>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                  <i class="icofont-light-bulb"></i>
                                  <h4>Efektif</h4>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                  <i class="icofont-unique-idea"></i>
                                  <h4>Efisien</h4>
                              </div>
                          </div>
                      </div>
                      <!-- End .content-->
                  </div>
              </div>

          </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Facts Section ======= -->
      <section class="facts cta" data-aos="fade-up">
          <div class="container">

              <div class="row counters">

                  <div class="col-lg-4 text-center">
                      <span data-toggle="counter-up"><?= $pengaturan->jml_penduduk; ?></span>
                      <p>Jumlah Penduduk</p>
                  </div>

                  <div class="col-lg-4 text-center">
                      <span data-toggle="counter-up"><?= $pengaturan->jml_penduduk_lk; ?></span>
                      <p>Jumlah Penduduk Laki-laki</p>
                  </div>

                  <div class="col-lg-4 text-center">
                      <span data-toggle="counter-up"><?= $pengaturan->jml_penduduk_pr; ?></span>
                      <p>Jumlah Penduduk Perempuan</p>
                  </div>

              </div>

          </div>
      </section>
      <!-- End Facts Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">

              <div class="section-title" data-aos="fade-up">
                  <h2><strong>Pelayanan Masyarakat</strong></h2>
              </div>

              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="icon-box" data-aos="fade-up">
                          <div class="icon"><i class="icofont-heart-alt"></i></div>
                          <h4 class="title"><a href="">Pelayanan Prima</a></h4>
                          <p class="description">Kami siap memberikan pelayanan terbaik untuk masyakarat, selain itu
                              kami juga memberikan informasi yang jelas untuk lebih mudah dipahami oleh masyarakat.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                          <div class="icon"><i class="icofont-search-document"></i></div>
                          <h4 class="title"><a href="">Transparansi</a></h4>
                          <p class="description">Kami memberikan informasi dan keterbukaan yang benar dan jelas untuk
                              meminimalisir terjadinya kesalahan atau penyimpangan pada masyarakat untuk setiap poinnya.
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                          <div class="icon"><i class="icofont-safety"></i></div>
                          <h4 class="title"><a href="">Akuntabilitas</a></h4>
                          <p class="description">Kami bertanggung jawab pada setiap kesalahan yang kami kerjakan, karena
                              kenyamanan masyarakat adalah yang utama.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                          <div class="icon"><i class="icofont-badge"></i></div>
                          <h4 class="title"><a href="">Utamakan Rakyat</a></h4>
                          <p class="description">Kami siap mengutamakan masyarakat untuk memberikan pelayanan terbaik
                              dan juga informasi.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                          <div class="icon"><i class="icofont-light-bulb"></i></div>
                          <h4 class="title"><a href="">Efektif</a></h4>
                          <p class="description">Kami dapat melakukan usaha dengan efektif untuk mendapatkan tujuan,
                              hasil dan terget yang diharapkan dengan tepat waktu.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                          <div class="icon"><i class="icofont-unique-idea"></i></div>
                          <h4 class="title"><a href="">Efisien</a></h4>
                          <p class="description">Kami dapat melakukan pekerjaan dengan tepat dan mampu menjalankan tugas
                              dengan cermat, dan berdaya guna.</p>
                      </div>
                  </div>
              </div>

          </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
          <div class="container">

              <div class="row">
                  <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                      <ul class="nav nav-tabs flex-column">
                          <li class="nav-item">
                              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                  <h4>Memberikan kemudahan sebuah informasi</h4>
                                  <p>Untuk memudahkan untuk masyarakat mencari informasi desa dari sebuah internet
                                      dengan mudah.</p>
                              </a>
                          </li>
                          <li class="nav-item mt-2">
                              <a class="nav-link" data-toggle="tab" href="#tab-2">
                                  <h4>Siap melayani masyarakat</h4>
                                  <p>Kami siap melayani kebutuhan masyarakat dengan baik dan juga memberikan informasi
                                      yang benar.</p>
                              </a>
                          </li>
                          <li class="nav-item mt-2">
                              <a class="nav-link" data-toggle="tab" href="#tab-3">
                                  <h4>Informasi dan berita</h4>
                                  <p>Kami dapat memberikan sebuah informasi atau seputar berita. Agar
                                      masyarakat dapat mengetahui adanya informasi atau berita terbaru dari kami.</p>
                              </a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-6 ml-auto" data-aos="fade-left" data-aos-delay="100">
                      <div class="tab-content">
                          <div class="tab-pane active show" id="tab-1">
                              <figure>
                                  <img src="<?= base_url('gambar/features/features-5.jpg'); ?>" alt=""
                                      class="img-fluid">
                              </figure>
                          </div>
                          <div class="tab-pane" id="tab-2">
                              <figure>
                                  <img src="<?= base_url('gambar/features/features-6.png'); ?>" alt=""
                                      class="img-fluid">
                              </figure>
                          </div>
                          <div class="tab-pane" id="tab-3">
                              <figure>
                                  <img src="<?= base_url('gambar/features/features-1.png'); ?>" alt=""
                                      class="img-fluid">
                              </figure>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section><!-- End Features Section -->

      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog bg-light">
          <div class="container">

              <div class="section-title" data-aos="fade-up">
                  <h2><strong>Berita Terbaru</strong></h2>
              </div>

              <div class="row">

                  <?php foreach($artikel as $a) { ?>
                  <div class="col-lg-4 entries">

                      <article class="entry bg-white" data-aos="fade-up">

                          <div class="entry-img">
                              <?php if ($a->artikel_sampul != "") { ?>
                              <img src="<?= base_url('gambar/artikel/') . $a->artikel_sampul; ?>"
                                  alt="<?= $a->artikel_judul; ?>" class="img-fluid">
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
                              <p><?= word_limiter($a->artikel_konten, 50); ?></p>
                              <div class="read-more">
                                  <a href="<?= base_url() . $a->artikel_slug; ?>">Selengkapnya</a>
                              </div>
                          </div>

                      </article>
                      <!-- End blog entry -->
                  </div>
                  <?php } ?>

              </div>
          </div>
      </section>

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
          <div class="container">

              <div class="section-title" data-aos="fade-up">
                  <h2><strong>Sambutan</strong></h2>
              </div>

              <div class="row">

                  <div class="col-lg-12" data-aos="fade-up">
                      <div class="testimonial-item">
                          <img src="<?= base_url('gambar/kepdes/') . $pengaturan->foto_kepdes ; ?>"
                              class="testimonial-img" alt="">
                          <h3><?= $pengaturan->nama_kepdes;?></h3>
                          <h4>Kepala Desa</h4>
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left text-dark"></i>
                              <?= $pengaturan->sambutan_kepdes;?>
                              <i class="bx bxs-quote-alt-right quote-icon-right text-dark"></i>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </section>



  </main>





  <!-- End #main -->