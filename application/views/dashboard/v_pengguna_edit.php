<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pengguna</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/pengguna'); ?>">Pengguna</a></li>
                        <li class="breadcrumb-item active">Edit Pengguna</li>
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
                    <div class="card card-blue">
                        <div class="card-header">
                            <h3 class="card-title">Edit Pengguna
                        </div>
                        <!-- /.card-header -->

                        <?php foreach ($pengguna as $p) { ?>
                        <form method="post" action="<?= base_url('dashboard/pengguna_update'); ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <input type="hidden" name="id" value="<?php echo $p->pengguna_id; ?>">
                                    <div class="col-sm-10">
                                        <input type="nama" name="nama" class="form-control"
                                            placeholder="Masukkan nama pengguna..."
                                            value="<?php echo $p->pengguna_nama; ?>">
                                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Masukkan email pengguna..."
                                            value="<?php echo $p->pengguna_email; ?>">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">username</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Masukkan username pengguna..."
                                            value="<?php echo $p->pengguna_email; ?>">
                                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <br />
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukkan password pengguna...">
                                        <small>Password minimal 5 karakter</small>
                                        <br />
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                        <select name="level" class="form-control">
                                            <option value="">- Pilih Level -</option>
                                            <option
                                                <?php if($p->pengguna_level == "admin"){ echo "selected='selected'";} ?>
                                                value="admin">Admin</option>
                                            <option
                                                <?php if($p->pengguna_level == "penulis"){ echo "selected='selected'";} ?>
                                                value="penulis">Penulis</option>
                                        </select>
                                        <?= form_error('level', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-control">
                                            <option value="">- Pilih Status -</option>
                                            <option
                                                <?php if($p->pengguna_status == "1"){ echo "selected='selected'";} ?>
                                                value="1">Terverifikasi</option>
                                            <option
                                                <?php if($p->pengguna_status == "0"){ echo "selected='selected'";} ?>value="0">
                                                Belum Terverifikasi</option>
                                        </select>
                                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="<?= base_url('dashboard/pengguna'); ?>"
                                    class="btn btn-success float-right">Kembali</a>
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
