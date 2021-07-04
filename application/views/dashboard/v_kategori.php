<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Kategori</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a href="<?= base_url('dashboard/kategori_tambah'); ?>" class="btn btn-primary">Buat Kategori Baru</a>
            <br />
            <br />

            <!-- Main content -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kategori
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">NO</th>
                                        <th>Kategori</th>
                                        <th>Slug</th>
                                        <th width="10%">OPSI</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
								$no = 1;
								foreach($kategori as $k){
								?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $k->kategori_nama; ?></td>
                                        <td><?= $k->kategori_slug; ?></td>
                                        <td><a href="<?= base_url('dashboard/kategori_edit/') . $k->kategori_id; ?>"
                                                class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('dashboard/kategori_hapus/') . $k->kategori_id; ?>"
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