<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pages</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Halaman</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a href="<?= base_url('dashboard/pages_tambah'); ?>" class="btn btn-primary">Buat Halaman Baru</a>
            <br />
            <br />

            <!-- Main content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Halaman
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>Judul Halaman</th>
                                        <th>URL SLug</th>
                                        <th width="14%">Gambar</th>
                                        <th width="13%">OPSI</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
								$no = 1;
								foreach($halaman as $h){
								?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $h->halaman_judul; ?></td>
                                        <td><?= base_url() . "page/".$h->halaman_slug; ?></td>
                                        <td>
                                            <?php
										if ($h->halaman_sampul=="") {
											echo "<span class='text-danger'>Gambar ini tidak diisi</span>";
										} else {
											echo "<img width='100%' class='img-responsive'" .
                                            "src='" . base_url('gambar/kategori/') .  $h->halaman_sampul. "'";
                                        }
                                        ?>
                                        </td>
                                        <td>
                                            <a target="_blank" href="<?= base_url() . "page/".$h->halaman_slug; ?>"
                                                class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="<?= base_url('dashboard/pages_edit/') . $h->halaman_id; ?>"
                                                class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('dashboard/pages_hapus/') . $h->halaman_id; ?>"
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