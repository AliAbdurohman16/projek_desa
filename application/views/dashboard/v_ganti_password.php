<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ganti Password</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Ganti Password</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <!-- Main content -->
            <div class="row">
                <div class="col-lg-8">
                    <?php
						if (isset($_GET['alert'])) {
							if ($_GET['alert'] == "sukses") {
								echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Password telah diubah!</div>";
							} else if ($_GET['alert'] == "gagal") {
								echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Maaf, Passwod lama yang anda masukkan salah!</div>";
							}
						}
					?>
                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title">Ganti Password
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form action="<?= base_url('dashboard/ganti_password_aksi'); ?>" method="POST"
                            enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password Lama</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password_lama" class="form-control"
                                            placeholder="Masukkan password lama anda...">
                                        <?= form_error('password_lama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password Baru</label>
                                    <br />
                                    <div class="col-sm-9">
                                        <input type="password" name="password_baru" class="form-control"
                                            placeholder="Masukkan password baru...">
                                        <small>Password minimal 5 karakter</small>
                                        <br />
                                        <?= form_error('password_baru', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="konfirmasi_password" class="form-control"
                                            placeholder="Ulangi password baru...">
                                        <?= form_error('konfirmasi_password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>

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