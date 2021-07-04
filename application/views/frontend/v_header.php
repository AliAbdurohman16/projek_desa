<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $pengaturan->nama?> | <?= $pengaturan->deskripsi ?></title>
    <meta content="<?= $meta_keyword ?>" name="keywords">
    <meta content="<?= $meta_description ?>" name="description">

    <!-- Favicons -->
    <link href="<?= base_url('gambar/logo/') . $pengaturan->logo; ?>" rel="icon">
    <link href="<?= base_url('gambar/logo/') . $pengaturan->logo; ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets_frontend/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_frontend/'); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_frontend/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_frontend/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_frontend/'); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets_frontend/'); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="<?= base_url('assets_frontend/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets_frontend/'); ?>assets/css/style.css" rel="stylesheet">
    <style>
    .about-us .image {
        background: url("<?= base_url('gambar/bg-image/1.jpg'); ?>") center center no-repeat;
        background-size: cover;
        min-height: 400px;
    }
    </style>

    <!-- =======================================================
  * Template Name: Flattern - v2.2.1
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <img src="<?= base_url('gambar/logo/') . $pengaturan->logo; ?>" width="50px" class="mr-2" alt="logo">
                <a class="navbar-brand" href="index.html"><?= $pengaturan->nama?></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul id="nav">
                    <li><a href="<?= base_url(); ?>">Beranda</a></li>
                    <li><a href="<?= base_url('page/profil-desa-ciuyah'); ?>">Profil</a></li>
                    <li><a href="<?= base_url('page/visi-dan-misi'); ?>">Visi dan Misi</a></li>
                    <li><a href="<?= base_url('berita'); ?>">Berita</a></li>
                    <li><a href="<?= base_url('page/demografi'); ?>">Demografi</a></li>
                    <li><a href="<?= base_url('aparatur-desa'); ?>">Aparatur Desa</a></li>
                    <li><a href="<?= base_url('kontak'); ?>">Kontak</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->