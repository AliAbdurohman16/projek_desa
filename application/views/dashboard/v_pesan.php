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
                        <li class="breadcrumb-item active">Pesan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <div class="row">

                <!-- /.col -->
                <div class="col-lg-12">
                    <div class="card card-blue">
                        <div class="card-header with-border">
                            <h3 class="card-title">Pesan</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body no-padding">
                            <table id="example1" class="table table-hover table-striped">
                                <tbody>
                                    <?php 
								$no = 1;
								foreach($pesan as $p){
								?>
                                    <tr>
                                        <td><a href="<?= base_url('dashboard/pesan_hapus/') . $p->id; ?>"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                        <td class="mailbox-name"><a
                                                href="<?= base_url('dashboard/pesan_detail/') . $p->id; ?>"><?= $p->nama; ?></a>
                                        </td>
                                        <td class='mailbox-subject'>
                                            <?php
												if ($p->status=="dibaca") {
													echo "<b> $p->subjek</b> - " . word_limiter($p->pesan, 15);
                                            } else {
                                            echo "<b>$p->subjek</b> - " . "<b>" .word_limiter($p->pesan, 15) .
                                                "</b>";
                                            }
                                            ?>
                                        </td>
                                        <td class="mailbox-date">
                                            <?= date('d M Y H:i', strtotime($p->tanggal)); ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>

                        <!-- Tombol halaman pagination -->
                        <div class="float-right">
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->

            </div>
        </div>

    </section>

</div>