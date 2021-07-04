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
                        <li class="breadcrumb-item active">Konfirmasi Hapus Pengguna</li>
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
                            <h3 class="card-title">Konfirmasi Hapus Pengguna
                        </div>
                        <!-- /.card-header -->

                        <form method="post" action="<?= base_url('dashboard/pengguna_hapus_aksi'); ?>">
                            <div class="card-body">
                                <p><b><?= $pengguna_hapus->pengguna_nama; ?></b> akan dihapus. dan semua artikel yang
                                    ditulis oleh <b><?= $pengguna_hapus->pengguna_nama; ?></b> akan dipindahkan ke ?</p>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Pengguna</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="pengguna_hapus"
                                            value="<?= $pengguna_hapus->pengguna_id; ?>">
                                        <select class="form-control" name="pengguna_tujuan" required="required">
                                            <option value="">- Pilih Level -</option>
                                            <?php foreach($pengguna_lain as $pl){ ?>
                                            <option value="<?= $pl->pengguna_id ?>"><?= $pl->pengguna_nama; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
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
    </section>
    <!-- /.content -->

</div>