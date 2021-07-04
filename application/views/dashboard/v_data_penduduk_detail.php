<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Penduduk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/data_penduduk'); ?>">Data
                                Penduduk</a>
                        </li>
                        <li class="breadcrumb-item active">Detail Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-8">

                    <?php
					if (isset($_GET['alert'])) {
						if ($_GET['alert'] == "sukses") {
							echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Data Penduduk telah diUpdate!</div>";
						}
					}
				?>

                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title">Detail Data Penduduk</h3>
                        </div>

                        <?php foreach ($data_penduduk as $dp) { ?>
                        <form method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <input type="hidden" name="id" value="<?= $dp->id; ?>">
                                    <label class="col-sm-4 col-form-label">No.Kartu Keluarga</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->kk; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No.NIK</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->nik; ?></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->nama_lengkap; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->tempat_lahir; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <p><?= date('d-m-Y', strtotime($dp->tanggal_lahir)); ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->jenis_kelamin; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Umur</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->umur; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Agama</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->agama; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Hub-Keluarga</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->hub_keluarga; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Perkawinan</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->perkawinan; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Pendidikan</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->pendidikan; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->pekerjaan; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->nama_ibu; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->nama_ayah; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->alamat; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">RT</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->rt; ?></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">RW</label>
                                    <div class="col-sm-8">
                                        <p><?= $dp->rw; ?></p>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <a href="<?= base_url('dashboard/data_penduduk_edit/') . $dp->id; ?>"
                                    class="btn btn-info">Edit Data</a>
                                <a href="<?= base_url('dashboard/data_penduduk'); ?>"
                                    class="btn btn-success float-right">Kembali</a>
                            </div>
                        </form>
                        <?php } ?>

                    </div>
                </div>

            </div>

    </section>


</div>
