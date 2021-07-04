<div class="login-box">
    <div class="login-logo">
        <?php
			$user = $this->db->query("SELECT * FROM pengaturan")->row();
		?>
        <img src="<?= base_url('gambar/logo/' . $user->logo); ?>" width="30%" alt="logo">
    </div>
    <!-- /.login-logo -->
    <?= $this->session->flashdata('message'); ?>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Anda lupa kata sandi Anda? Masukkan email anda!</p>

            <form action="<?= base_url('login/lupa_kata_sandi'); ?>" method="post">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Konfirmasi Email</button>
                        <a href="<?= base_url('login'); ?>" class="btn btn-danger btn-block">Kembali</a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
