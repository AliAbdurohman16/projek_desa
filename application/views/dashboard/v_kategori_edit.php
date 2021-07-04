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
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/kategori'); ?>">Kategori</a></li>
                        <li class="breadcrumb-item active">Edit Kategori</li>
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
                            <h3 class="card-title">Edit Kategori Baru
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <?php foreach($kategori as $k) { ?>
                        <form action="<?= base_url('dashboard/kategori_update'); ?>" method="POST"
                            class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputkategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputkategori" name="kategori"
                                            placeholder="Nama Kategori" value="<?= $k->kategori_nama; ?>">
                                        <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="<?= base_url('dashboard/kategori'); ?>"
                                    class="btn btn-success float-right">kembali</a>
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