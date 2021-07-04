<div class="login-box">
    <div class="login-logo">
        <?php
			$user = $this->db->query("SELECT * FROM pengaturan")->row();
		?>
        <img src="<?= base_url('gambar/logo/' . $user->logo); ?>" width="30%" alt="logo">
    </div>
    <!-- /.login-logo -->

    <?php
		if (isset($_GET['alert'])) {
			if ($_GET['alert'] == "gagal") {
				echo "<div class='alert alert-danger text-center' role='alert'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Maaf! Email & Password salah!.</div>";
			}else if ($_GET['alert'] == "belum_login") {
				echo "<div class='alert alert-danger text-center'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Anda harus login terlebih dahulu!.</div>";
		}else if ($_GET['alert'] == "logout") {
			echo "<div class='alert alert-success text-center'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Anda telah logout!.</div>";
			}
		}
	?>
    <?= $this->session->flashdata('message'); ?>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Masuk</p>

            <form action="<?= base_url('login/aksi'); ?>" method="post">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email" name="email"
                            value="<?= set_value('email'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-3">Masuk</button>
            </form>

            <center>
                <a href="<?= base_url('login/lupa_kata_sandi'); ?>">Lupa Kata Sandi?</a>
            </center>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

<!-- /.login-box -->
