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
                        <li class="breadcrumb-item active">Tambah Data Penduduk</li>
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
                            <h3 class="card-title">Tambah Data Penduduk</h3>
                        </div>

                        <form method="post" action="<?= base_url('dashboard/data_penduduk_aksi'); ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No.Kartu Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="kk" class="form-control"
                                            placeholder="Masukkan No.Kartu Keluarga...">
                                        <?= form_error('kk', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No.NIK</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="nik" class="form-control"
                                            placeholder="Masukkan No.NIK...">
                                        <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
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
                                            placeholder="Masukkan Tanggal Lahir ...">
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
                                    <label class="col-sm-3 col-form-label">Umur</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="umur" class="form-control"
                                            placeholder="Masukkan Umur...">
                                        <?= form_error('umur', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select name="agama" class="form-control">
                                            <option value="">- Pilih Agama -</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Katholik">Katholik</option>
                                            <option value="Atheis">Atheis</option>
                                        </select>
                                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Hub-Keluarga</label>
                                    <div class="col-sm-9">
                                        <select name="hub_keluarga" class="form-control">
                                            <option value="">- Pilih Hub-Keluarga -</option>
                                            <option value="Kepala Keluarga">Kepala Keluarga</option>
                                            <option value="Istri">Istri</option>
                                            <option value="Anak">Anak</option>
                                        </select>
                                        <?= form_error('hub_keluarga', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Perkawinan</label>
                                    <div class="col-sm-9">
                                        <select name="perkawinan" class="form-control">
                                            <option value="">- Pilih Perkawinan -</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                        <?= form_error('perkawinan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan</label>
                                    <div class="col-sm-9">
                                        <select name="pendidikan" class="form-control">
                                            <option value="">- Pilih Pendidikan -</option>
                                            <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                            <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat
                                            </option>
                                            <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                            <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                            <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                        <?= form_error('pendidikan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <select name="pekerjaan" class="form-control">
                                            <option value="">- Pilih Pekerjaan -</option>
                                            <?php foreach ($data_pekerjaan as $p) { ?>
                                            <option
                                                <?php if (set_value('data_pekerjaan') == $p->id_pekerjaan) { echo "selected='selected'"; } ?>
                                                value="<?= strtoupper($p->nama_pekerjaan); ?>">
                                                <?= strtoupper($p->nama_pekerjaan); ?></option>
                                            <?php } ?>
                                        </select>
                                        <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ibu" class="form-control"
                                            placeholder="Masukkan Nama Ibu...">
                                        <?= form_error('nama_ibu', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ayah" class="form-control"
                                            placeholder="Masukkan Nama Ayah...">
                                        <?= form_error('nama_ayah', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control"
                                            placeholder="Masukkan Alamat...">
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RT</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="rt" class="form-control"
                                            placeholder="Masukkan RT...">
                                        <?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RW</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="rw" class="form-control"
                                            placeholder="Masukkan rw...">
                                        <?= form_error('rw', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="<?= base_url('dashboard/data_penduduk'); ?>"
                                    class="btn btn-success float-right">kembali</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </section>

</div>
