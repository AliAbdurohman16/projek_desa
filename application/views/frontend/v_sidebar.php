<div class="col-lg-4">

    <div class="sidebar bg-white" data-aos="fade-left">

        <h3 class="sidebar-title">Search</h3>
        <div class="sidebar-item search-form">
            <form action="<?= base_url('search'); ?>" method="GET">
                <input type="text" name="cari">
                <button type="submit"><i class="icofont-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->

        <h3 class="sidebar-title">Kategori</h3>
        <div class="sidebar-item categories">
            <ul>
                <?php
				$kategori = $this->m_data->get_data('kategori')->result();
				foreach($kategori as $k) {
				?>
                <li><a href="<?= base_url('kategori/') . $k->kategori_slug; ?>"><?= $k->kategori_nama; ?></a></li>
                <?php } ?>
            </ul>

        </div><!-- End sidebar categories-->

        <h3 class="sidebar-title">Artikel Terbaru</h3>
        <?php
			$artikel = $this->db->query("SELECT * FROM artikel, pengguna, kategori WHERE artikel_status = 'publish' AND artikel_author = pengguna_id AND artikel_kategori = kategori_id ORDER BY artikel_id DESC LIMIT 6")->result();
            foreach ($artikel as $a) { ?>
        <div class="sidebar-item recent-posts">
            <div class="post-item clearfix">
                <img src="<?= base_url('gambar/artikel/') . $a->artikel_sampul; ?>" alt="">
                <h4><a href="<?= base_url() . $a->artikel_slug; ?>"><?= $a->artikel_judul; ?></a></h4>
                <time><?= date('d-M-Y', strtotime($a->artikel_tanggal)); ?></time>
            </div>
        </div><!-- End sidebar recent posts-->
        <?php } ?>
    </div><!-- End sidebar -->


</div><!-- End blog sidebar -->