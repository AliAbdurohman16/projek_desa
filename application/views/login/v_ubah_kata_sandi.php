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
            <p class="login-box-msg">Ubah Kata Sandi!</p>
            <p class="login-box-msg"><?= $this->session->userdata('reset_email'); ?></p>

            <form action="<?= base_url('login/ubah_kata_sandi'); ?>" method="post">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Masukkan Kata Sandi Baru"
                            name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi Baru"
                            name="password1">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a href="<?= base_url('login'); ?>" class="btn btn-danger btn-block">Kembali</a>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
