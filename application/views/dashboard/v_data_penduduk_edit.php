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
                        <li class="breadcrumb-item active">Edit Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <?php foreach ($data_penduduk as $dp) { ?>
            <div class="row">
                <div class="col-lg-8">

                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Penduduk</h3>
                        </div>

                        <form method="post" action="<?= base_url('dashboard/data_penduduk_update'); ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No.Kartu Keluarga</label>
                                    <input type="hidden" name="id" value="<?= $dp->id; ?>">
                                    <div class="col-sm-9">
                                        <input type="number" name="kk" class="form-control"
                                            placeholder="Masukkan No.Kartu Keluarga..." value="<?= $dp->kk; ?>">
                                        <?= form_error('kk', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No.NIK</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="nik" class="form-control"
                                            placeholder="Masukkan No.NIK..." value="<?= $dp->nik; ?>">
                                        <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_lengkap" class="form-control"
                                            placeholder="Masukkan Nama Lengkap..." value="<?= $dp->nama_lengkap; ?>">
                                        <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat_lahir" class="form-control"
                                            placeholder="Masukkan Tempat Lahir..." value="<?= $dp->tempat_lahir; ?>">
                                        <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_lahir" class="form-control"
                                            placeholder="Masukkan username baru anda..."
                                            value="<?= $dp->tanggal_lahir; ?>">
                                        <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="">- Pilih Jenis Kelamin -</option>
                                            <option
                                                <?php if($dp->jenis_kelamin == "LAKI-LAKI"){ echo "selected='selected'";} ?>
                                                value="Laki-laki">Laki-laki</option>
                                            <option
                                                <?php if($dp->jenis_kelamin == "PEREMPUAN"){ echo "selected='selected'";} ?>
                                                value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Umur</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="umur" class="form-control"
                                            placeholder="Masukkan Umur..." value="<?= $dp->umur; ?>">
                                        <?= form_error('umur', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select name="agama" class="form-control">
                                            <option value="">- Pilih Agama -</option>
                                            <option <?php if($dp->agama == "ISLAM"){ echo "selected='selected'";} ?>
                                                value="Islam">Islam</option>
                                            <option <?php if($dp->agama == "KRISTEN"){ echo "selected='selected'";} ?>
                                                value="Kristen">Kristen</option>
                                            <option <?php if($dp->agama == "HINDU"){ echo "selected='selected'";} ?>
                                                value="Hindu">Hindu</option>
                                            <option <?php if($dp->agama == "BUDHA"){ echo "selected='selected'";} ?>
                                                value="Budha">Budha</option>
                                            <option <?php if($dp->agama == "KATHOLIK"){ echo "selected='selected'";} ?>
                                                value="Katholik">Katholik</option>
                                            <option <?php if($dp->agama == "ATHEIS"){ echo "selected='selected'";} ?>
                                                value="Atheis">Atheis</option>
                                        </select>
                                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Hub-Keluarga</label>
                                    <div class="col-sm-9">
                                        <select name="hub_keluarga" class="form-control">
                                            <option value="">- Pilih Hub-Keluarga -</option>
                                            <option
                                                <?php if($dp->hub_keluarga == "KEPALA KELUARGA"){ echo "selected='selected'";} ?>
                                                value="Kepala Keluarga">Kepala Keluarga</option>
                                            <option
                                                <?php if($dp->hub_keluarga == "ISTRI"){ echo "selected='selected'";} ?>
                                                value="Istri">Istri</option>
                                            <option
                                                <?php if($dp->hub_keluarga == "ANAK"){ echo "selected='selected'";} ?>
                                                value="Anak">Anak</option>
                                        </select>
                                        <?= form_error('hub_keluarga', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Perkawinan</label>
                                    <div class="col-sm-9">
                                        <select name="perkawinan" class="form-control">
                                            <option value="">- Pilih Perkawinan -</option>
                                            <option
                                                <?php if($dp->perkawinan == "BELUM KAWIN"){ echo "selected='selected'";} ?>
                                                value="Belum Kawin">Belum Kawin</option>
                                            <option
                                                <?php if($dp->perkawinan == "KAWIN"){ echo "selected='selected'";} ?>
                                                value="Kawin">Kawin</option>
                                            <option
                                                <?php if($dp->perkawinan == "CERAI HIDUP"){ echo "selected='selected'";} ?>
                                                value="Cerai Hidup">Cerai Hidup</option>
                                            <option
                                                <?php if($dp->perkawinan == "CERAI MATI"){ echo "selected='selected'";} ?>
                                                value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                        <?= form_error('perkawinan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan</label>
                                    <div class="col-sm-9">
                                        <select name="pendidikan" class="form-control">
                                            <option value="">- Pilih Pendidikan -</option>
                                            <option
                                                <?php if($dp->pendidikan == "TIDAK/BELUM SEKOLAH"){ echo "selected='selected'";} ?>
                                                value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                            <option
                                                <?php if($dp->pendidikan == "BELUM TAMAT SD/SEDERAJAT"){ echo "selected='selected'";} ?>
                                                value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat
                                            </option>
                                            <option
                                                <?php if($dp->pendidikan == "TAMAT SD/SEDERAJAT"){ echo "selected='selected'";} ?>
                                                value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                            <option
                                                <?php if($dp->pendidikan == "SLTP/SEDERAJAT"){ echo "selected='selected'";} ?>
                                                value="SLTP/Sederajat">SLTP/Sederajat</option>
                                            <option
                                                <?php if($dp->pendidikan == "SLTA/SEDERAJAT"){ echo "selected='selected'";} ?>
                                                value="SLTA/Sederajat">SLTA/Sederajat</option>
                                            <option <?php if($dp->pendidikan == "D3"){ echo "selected='selected'";} ?>
                                                value="D3">D3</option>
                                            <option <?php if($dp->pendidikan == "S1"){ echo "selected='selected'";} ?>
                                                value="S1">S1</option>
                                            <option <?php if($dp->pendidikan == "S2"){ echo "selected='selected'";} ?>
                                                value="S2">S2</option>
                                            <option <?php if($dp->pendidikan == "S3"){ echo "selected='selected'";} ?>
                                                value="S3">S3</option>
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
                                                <?php if ($dp->pekerjaan == strtoupper($p->nama_pekerjaan)) { echo "selected='selected'"; } ?>
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
                                            placeholder="Masukkan Nama Ibu..." value="<?= $dp->nama_ibu; ?>">
                                        <?= form_error('nama_ibu', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ayah" class="form-control"
                                            placeholder="Masukkan Nama Ayah..." value="<?= $dp->nama_ayah; ?>">
                                        <?= form_error('nama_ayah', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control"
                                            placeholder="Masukkan Alamat..." value="<?= $dp->alamat; ?>">
                                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RT</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="rt" class="form-control" placeholder="Masukkan RT..."
                                            value="<?= $dp->rt; ?>">
                                        <?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RW</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="rw" class="form-control" placeholder="Masukkan rw..."
                                            value="<?= $dp->rw; ?>">
                                        <?= form_error('rw', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <input type="submit" class="btn btn-info" value="Simpan">
                                <a href="<?= base_url('dashboard/data_penduduk_detail/') . $dp->id; ?>"
                                    class="btn btn-success float-right">Kembali</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <?php } ?>
    </section>
</div>
