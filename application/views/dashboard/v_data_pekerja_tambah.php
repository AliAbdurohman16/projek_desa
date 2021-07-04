<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Aparatur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/data_pekerja'); ?>">Data
                                Aparatur</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah Data Aparatur</li>
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

                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title">Data Aparatur</h3>
                        </div>

                        <form method="post" action="<?= base_url('dashboard/data_pekerja_aksi'); ?>"
                            enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_lengkap" class="form-control"
                                            placeholder="Masukkan Nama Lengkap...">
                                        <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat_lahir" class="form-control"
                                            placeholder="Masukkan Tempat Lahir...">
                                        <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tgl_lahir" class="form-control"
                                            placeholder="Masukkan username baru anda...">
                                        <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="">- Pilih Jenis Kelamin -</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jabatan" class="form-control"
                                            placeholder="Masukkan jabatan...">
                                        <?= form_error('jabatan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <select name="pendidikan_terakhir" class="form-control">
                                            <option value="">- Pilih Pendidikan -</option>
                                            <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                            <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                            <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                            <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                            <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                            <option value="D.III">D.III</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                        <?= form_error('pendidikan_terakhir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Foto</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="foto" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <?php
									if (isset($gambar_error)) {
										echo $gambar_error;
									} 
									?>
                                        <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>


                            </div>

                            <div class="card-footer">
                                <input type="submit" class="btn btn-info" value="Simpan">
                                <a href="<?= base_url('dashboard/data_pekerja'); ?>"
                                    class="btn btn-success float-right">Kembali</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>