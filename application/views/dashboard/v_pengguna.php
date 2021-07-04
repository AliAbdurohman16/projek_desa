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
                        <li class="breadcrumb-item active">Pengguna</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a href="<?= base_url('dashboard/pengguna_tambah'); ?>" class="btn btn-primary">Buat Pengguna Baru</a>
            <br />
            <br />

            <!-- Main content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pengguna
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th width="10%">foto</th>
                                        <th width="10%">OPSI</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
								$no = 1;
								foreach($pengguna as $p){
								?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $p->pengguna_nama; ?></td>
                                        <td><?= $p->pengguna_email; ?></td>
                                        <td><?= $p->pengguna_username; ?></td>
                                        <td><?= $p->pengguna_level; ?></td>
                                        <td>
                                            <?php
										if ($p->pengguna_status == 1) {
											echo "<span class='badge badge-success'>Terverfikasi</span>";
										} else {
											echo "<span class='badge badge-danger'>Belum Terverfikasi</span>";
										}
										?>
                                        </td>
                                        <td><img width="100%" class="img-responsive"
                                                src="<?= base_url('gambar/profil/') . $p->pengguna_foto; ?>">
                                        </td>
                                        <td><a href="<?= base_url('dashboard/pengguna_edit/') . $p->pengguna_id; ?>"
                                                class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('dashboard/pengguna_hapus/') . $p->pengguna_id; ?>"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
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