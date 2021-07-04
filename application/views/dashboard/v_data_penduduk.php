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
                        <li class="breadcrumb-item active">Data Penduduk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <a href="<?= base_url('dashboard/data_penduduk_tambah'); ?>" class="btn btn-primary">Tambah Data
                Penduduk</a>
            <br />
            <br />

            <?php
					if (isset($_GET['alert'])) {
						if ($_GET['alert'] == "sukses") {
							echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Data Penduduk telah ditambahkan!</div>";
						}
					}
				?>

            <!-- Main content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Penduduk
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>KK</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Agama</th>
                                        <th width="8%">OPSI</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
								$no = 1;
								foreach($data_penduduk as $dp){
								?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $dp->kk; ?></td>
                                        <td><?= $dp->nik; ?></td>
                                        <td><?= $dp->nama_lengkap; ?></td>
                                        <td><?= $dp->tempat_lahir; ?></td>
                                        <td><?= date('d-m-Y', strtotime($dp->tanggal_lahir)); ?></td>
                                        <td><?= $dp->jenis_kelamin; ?></td>
                                        <td><?= $dp->umur; ?></td>
                                        <td><?= $dp->agama; ?></td>
                                        <td>
                                            <a href="<?= base_url('dashboard/data_penduduk_detail/') . $dp->id; ?>"
                                                class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="<?= base_url('dashboard/data_penduduk_edit/') . $dp->id; ?>"
                                                class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('dashboard/data_penduduk_hapus/') . $dp->id; ?>"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>