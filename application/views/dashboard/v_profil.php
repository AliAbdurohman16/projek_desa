<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profil</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Profil</li>
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
								echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Profil telah diupdate!</div>";
							}
						}
					?>
                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title">Profil
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <?php foreach($profil as $p) { ?>
                        <form action="<?= base_url('dashboard/profil_update'); ?>" method="POST"
                            enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control"
                                            placeholder="Masukkan nama baru anda..." value="<?= $p->pengguna_nama; ?>">
                                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Masukkan username baru anda..."
                                            value="<?= $p->pengguna_username; ?>">
                                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Masukkan email baru anda..."
                                            value="<?= $p->pengguna_email; ?>">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Foto Profil</label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="<?= base_url('gambar/profil/') . $p->pengguna_foto; ?>"
                                                    class="img-thumbnail col-lg-10">
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="custom-file">
                                                    <input type="file" name="foto" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <small>Kosongkan jika tidak ingin mengubah foto profil</small>
                                            </div>
                                        </div>
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