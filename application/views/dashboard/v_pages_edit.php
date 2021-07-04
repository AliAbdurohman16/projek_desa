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
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/pages'); ?>">Pages</a></li>
                        <li class="breadcrumb-item active">Edit Halaman</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a href="<?= base_url('dashboard/pages'); ?>" class="btn btn-success">Kembali</a>
            <br />
            <br />

            <!-- Main content -->
            <!-- form start -->
            <?php foreach ($halaman as $h) { ?>
            <form action="<?= base_url('dashboard/pages_update'); ?>" method="POST" enctype="multipart/form-data"
                class="form-horizontal">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Halaman</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $h->halaman_id; ?>">
                                    <label>Judul</label>
                                    <input type="text" name="judul" class="form-control" placeholder="Masukkan judul..."
                                        value="<?= $h->halaman_judul; ?>">
                                    <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Gambar Sampul</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="sampul" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                    </div>

                                    <?php
									if (isset($gambar_error)) {
										echo $gambar_error;
									} 
									?>
                                </div>

                                <div class="form-group">
                                    <label>Konten</label>
                                    <br />
                                    <?= form_error('konten', '<small class="text-danger">', '</small>'); ?>
                                    <textarea class=" textarea" name="konten" placeholder="Place some text here"
                                        style="width: 100%; height: 200%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $h->halaman_konten; ?></textarea>
                                </div>
                                <input type="submit" name="status" value="Simpan" class="btn btn-success btn-block">
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </form>
            <?php } ?>

        </div>
    </section>
    <!-- /.content -->

</div>
