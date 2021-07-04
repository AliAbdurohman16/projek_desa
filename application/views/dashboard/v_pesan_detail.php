<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pesan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard/pesan'); ?>">Pesan</a></li>
                        <li class="breadcrumb-item active">Detail Pesan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <a href="<?= base_url('dashboard/pesan'); ?>" class="btn btn-sm btn-primary">Kembali</a>
            <br />
            <br />

            <div class="row">

                <!-- /.col -->
                <div class="col-md-10">
                    <div class="card card-blue">
                        <div class="card-header with-border">
                            <h3 class="card-title">Pesan Detail</h3>
                        </div>
                        <!-- /.box-header -->
                        <?php foreach ($pesan as $p) { ?>
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h2><?= $p->subjek; ?></h2>
                                <h5>Dari : <?= $p->nama; ?> - <?= $p->email; ?>
                                    <span
                                        class="mailbox-read-time pull-right"><?= date('d M Y H:i', strtotime($p->tanggal)); ?></span>
                                </h5>
                            </div>
                        </div>
                        <!-- /.mailbox-controls -->
                        <div class="mailbox-read-message">
                            <p><?= $p->pesan; ?></p>
                        </div>
                        <?php } ?>
                        <!-- /.mailbox-read-message -->
                    </div>
                </div>
                <!-- /.col -->

            </div>
        </div>

    </section>
</div>