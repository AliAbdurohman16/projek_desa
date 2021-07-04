<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Artikel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Artikel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a href="<?= base_url('dashboard/artikel_tambah'); ?>" class="btn btn-primary">Buat Artikel Baru</a>
            <br />
            <br />

            <!-- Main content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Artikel
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>Tanggal</th>
                                        <th>Artikel</th>
                                        <th>Author</th>
                                        <th>Kategori</th>
                                        <th width="10%">Gambar</th>
                                        <th>Status</th>
                                        <th width="13%">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
								$no = 1;
								foreach($artikel as $a){
								?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= date('d/m/Y H:i', strtotime($a->artikel_tanggal)); ?></td>
                                        <td>
                                            <?= $a->artikel_judul; ?>
                                            <br />
                                            <small class="text-muted"><?= base_url() . "" .$a->artikel_slug; ?></small>
                                        </td>
                                        <td><?= $a->pengguna_nama; ?></td>
                                        <td><?= $a->kategori_nama; ?></td>
                                        <td><img width="100%" class="img-responsive"
                                                src="<?= base_url('gambar/artikel/') . $a->artikel_sampul; ?>">
                                        </td>
                                        <td>
                                            <?php
												if ($a->artikel_status=="publish") {
													echo "<span class='badge badge-success'>Publish</span>";
												} else {
													echo "<span class='badge badge-danger'>Draft</span>";
												}
											?>
                                        </td>
                                        <td>
                                            <a target="_blank" href="<?= base_url().$a->artikel_slug; ?>"
                                                class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>

                                            <?php
											// Cek apakah pengguna yang login adalah penulis
											if ($this->session->userdata('level') == "penulis") {
												// Jika penulis, maka cek apakah penulis artikel ini adalah si pengguna atau bukan

                                                if ($this->session->userdata('id') == $a->artikel_author) {
                                         ?>
                                            <a href="<?= base_url('dashboard/artikel_edit/') . $a->artikel_id; ?>"
                                                class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('dashboard/artikel_hapus/') . $a->artikel_id; ?>"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            <?php
                                                }
													
											}else {
												// jika yang login adalah admin
										?>
                                            <a href="<?= base_url('dashboard/artikel_edit/') . $a->artikel_id; ?>"
                                                class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('dashboard/artikel_hapus/') . $a->artikel_id; ?>"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            <?php }  ?>

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