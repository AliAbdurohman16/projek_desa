<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pengaturan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">pengaturan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <?php
				if (isset($_GET['alert'])) {
					if ($_GET['alert'] == "sukses") {
						echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Pengaturan telah diupdate!</div>";
					}
				}
			?>

            <!-- Main content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title">Pengaturan
                        </div>
                        <!-- /.card-header -->

                        <?php foreach ($pengaturan as $p) { ?>
                        <form method="post" action="<?= base_url('dashboard/pengaturan_update'); ?>"
                            enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Nama Website</label>
                                    <div class="col-md-8"> <input type="text" name="nama" class="form-control"
                                            placeholder="Masukkan nama website..." value="<?= $p->nama; ?>">
                                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Logo Website</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('gambar/logo/') . $p->logo; ?>"
                                                    class="img-thumbnail col-lg-8">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="logo" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <small>Kosongkan jika tidak ingin mengubah logo</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Slogan 1</label>
                                    <div class="col-md-8"> <textarea name="slogan_1" class="form-control"
                                            placeholder="Masukkan slogan 1..."><?= $p->slogan_1; ?></textarea>
                                        <?= form_error('slogan_1', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Foto Slide 1</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('gambar/bg-image/') . $p->slider_1; ?>"
                                                    class="img-thumbnail col-lg-8">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="slider_1" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <small>Kosongkan jika tidak ingin mengubahnya</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Slogan 2</label>
                                    <div class="col-md-8"> <textarea name="slogan_2" class="form-control"
                                            placeholder="Masukkan slogan 2..."><?= $p->slogan_2; ?></textarea>
                                        <?= form_error('slogan_2', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Foto Slide 2</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('gambar/bg-image/') . $p->slider_2; ?>"
                                                    class="img-thumbnail col-lg-8">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="slider_2" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <small>Kosongkan jika tidak ingin mengubahnya</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Slogan 3</label>
                                    <div class="col-md-8"> <textarea name="slogan_3" class="form-control"
                                            placeholder="Masukkan slogan 3..."><?= $p->slogan_3; ?></textarea>
                                        <?= form_error('slogan_3', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Foto Slide 3</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('gambar/bg-image/') . $p->slider_3; ?>"
                                                    class="img-thumbnail col-lg-8">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="slider_3" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <small>Kosongkan jika tidak ingin mengubahnya</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Deskripsi</label>
                                    <div class="col-md-8">
                                        <input type="text" name="deskripsi" class="form-control"
                                            placeholder="Masukkan deskripsi..." value="<?= $p->deskripsi; ?>">
                                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Nama Kepala Desa</label>
                                    <div class="col-md-8">
                                        <input type="text" name="nama_kepdes" class="form-control"
                                            placeholder="Masukkan nama kepala desa..." value="<?= $p->nama_kepdes; ?>">
                                        <?= form_error('nama_kepdes', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Foto Kepala Desa</label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('gambar/kepdes/') . $p->foto_kepdes; ?>"
                                                    class="img-thumbnail col-lg-8">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="foto_kepdes" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                        <?= form_error('foto_kepdes', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <small>Kosongkan jika tidak ingin mengubah logo</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Sambutan Kepala Desa</label>
                                    <div class="col-md-8">
                                        <textarea name="sambutan_kepdes" class="form-control"
                                            placeholder="Masukkan sambutan kepala desa..."><?= $p->sambutan_kepdes; ?></textarea>
                                        <?= form_error('sambutan_kepdes', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Teks Pembuka</label>
                                    <div class="col-md-8">
                                        <textarea name="teks_pembuka" class="form-control"
                                            placeholder="Masukkan teks pembuka..."><?= $p->teks_pembuka; ?></textarea>
                                        <?= form_error('teks_pembuka', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Tentang</label>
                                    <div class="col-md-8">
                                        <textarea name="tentang" class="form-control"
                                            placeholder="Masukkan tentang..."><?= $p->tentang; ?></textarea>
                                        <?= form_error('tentang', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Jumlah Penduduk</label>
                                    <div class="col-md-8">
                                        <input type="number" name="jml_penduduk" class="form-control"
                                            placeholder="Masukkan jumlah penduduk..." value="<?= $p->jml_penduduk; ?>">
                                        <?= form_error('jml_penduduk', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Jumlah Penduduk Laki-laki</label>
                                    <div class="col-md-8">
                                        <input type="number" name="jml_penduduk_lk" class="form-control"
                                            placeholder="Masukkan jumlah penduduk laki-laki..."
                                            value="<?= $p->jml_penduduk_lk; ?>">
                                        <?= form_error('jml_penduduk_lk', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Jumlah Penduduk Perempuan</label>
                                    <div class="col-md-8">
                                        <input type="number" name="jml_penduduk_pr" class="form-control"
                                            placeholder="Masukkan jumlah penduduk perempuan..."
                                            value="<?= $p->jml_penduduk_pr; ?>">
                                        <?= form_error('jml_penduduk_pr', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Telepon</label>
                                    <div class="col-md-8">
                                        <input type="number" name="telepon" class="form-control"
                                            placeholder="Masukkan telepon..." value="<?= $p->telepon; ?>">
                                        <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Masukkan email..." value="<?= $p->email; ?>">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Alamat</label>
                                    <div class="col-md-8">
                                        <input type="text" name="alamat" class="form-control"
                                            placeholder="Masukkan alamat..." value="<?= $p->alamat; ?>">
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Link Facebook</label>
                                    <div class="col-md-8">
                                        <input type="text" name="link_facebook" class="form-control"
                                            placeholder="Masukkan link facebook..." value="<?= $p->facebook; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Link Instagram</label>
                                    <div class="col-md-8">
                                        <input type="text" name="link_instagram" class="form-control"
                                            placeholder="Masukkan link instagram..." value="<?= $p->instagram; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Link Youtube</label>
                                    <div class="col-md-8">
                                        <input type="text" name="link_youtube" class="form-control"
                                            placeholder="Masukkan link youtube..." value="<?= $p->youtube; ?>">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <?php } ?>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

            <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->

</div>
