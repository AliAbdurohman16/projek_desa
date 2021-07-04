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
                        <li class="breadcrumb-item active">Buat Pengguna Baru</li>
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
                            <h3 class="card-title">Buat Pengguna Baru
                        </div>
                        <!-- /.card-header -->

                        <form method="post" action="<?= base_url('dashboard/pengguna_aksi'); ?>">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control"
                                            value="<?= set_value('nama'); ?>" placeholder="Masukkan nama pengguna...">
                                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control"
                                            value="<?= set_value('email'); ?>"
                                            placeholder=" Masukkan email pengguna...">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">username</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="username" class="form-control"
                                            value="<?= set_value('username'); ?>"
                                            placeholder=" Masukkan username pengguna...">
                                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <br />
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control"
                                            value="<?= set_value('password'); ?>"
                                            placeholder=" Masukkan password pengguna...">
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
                                            <option value="admin">Admin</option>
                                            <option value="penulis">Penulis</option>
                                        </select>
                                        <?= form_error('level', '<small class="text-danger">', '</small>'); ?>
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
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </
section>
    <!-- /.content -->

</div>