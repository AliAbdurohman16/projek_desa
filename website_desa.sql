-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2021 pada 17.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_slug` varchar(255) NOT NULL,
  `artikel_konten` longtext NOT NULL,
  `artikel_sampul` varchar(255) NOT NULL,
  `artikel_author` int(11) NOT NULL,
  `artikel_kategori` int(11) NOT NULL,
  `artikel_status` enum('publish','draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_tanggal`, `artikel_judul`, `artikel_slug`, `artikel_konten`, `artikel_sampul`, `artikel_author`, `artikel_kategori`, `artikel_status`) VALUES
(8, '2020-12-25 13:50:48', 'DPRD Kabupaten Cirebon Alokasikan Sebagian Anggaran Pokir Untuk Atasi Banjir Waled', 'dprd-kabupaten-cirebon-alokasikan-sebagian-anggaran-pokir-untuk-atasi-banjir-waled', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px;\">Demikian dikatakan Anggota DPRD Kabupaten Cirebon, Nana Kencana Wati di wilayah Banjir Waled Kabupaten Cirebon, Sabtu (27/2)</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px;\">Menurut Nana, beberapa anggota dewan perwakilan rakyat daerah (DPRD) yang tinggal di wilayah Kecamatan Waled berinisiatif untuk menggunakan anggaran pokir untuk digunakan dalam penanganan banjir. Soal besaran anggaran, ia menyebut sekitar Rp 200 juta.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px;\">“Mudah-mudahan sih anggota dewan dari Dapil 6 lainnya juga sepakat bahwa pokir 1,2 miliar bisa untuk membantu pembangunan infrastruktur di wilayah Waled, “ kata pensiunan guru yang kini terjun ke Politik tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px;\">Menurut Politis Gerindra itu, penggunaan anggaran Pokir saat ini sudah diusulkan ke DPRD Kabupaten Cirebon. Rencanya, Ketua DPRD akan meminta persetujuan 50 anggota dewan, untuk menyisihkan anggaran pokir untuk penanganan banjir di Waled.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px;\">“Kami memandang perlu adanya sinergi dengan semua pihak dalam menangani masalah banjir yang kerap terjadi di Kabupaten Cirebon, “ katanya</p><div class=\"google-auto-placed ap_container\" style=\"color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px; width: 521.078px; height: auto; clear: both; text-align: center;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-7349646297780205\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\" style=\"display: block; margin: auto; background-color: transparent; height: 0px;\"><ins id=\"aswift_4_expand\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"display: inline-table; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 521px; background-color: transparent;\"><ins id=\"aswift_4_anchor\" style=\"display: block; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 521px; background-color: transparent; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_4\" name=\"aswift_4\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"521\" height=\"0\" frameborder=\"0\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-7349646297780205&output=html&h=280&adk=207076038&adf=2748761352&pi=t.aa~a.2160679535~i.17~rp.4&w=521&fwrn=4&fwrnh=100&lmt=1624637356&num_ads=1&rafmt=1&armr=3&sem=mc&pwprc=3146104508&psa=0&ad_type=text_image&format=521x280&url=https%3A%2F%2Fwww.rmoljabar.id%2Fdprd-kabupaten-cirebon-alokasikan-sebagian-anggaran-pokir-untuk-atasi-banjir-waled&flash=0&fwr=0&pra=3&rh=131&rw=521&rpe=1&resp_fmts=3&wgl=1&fa=27&adsid=ChEI8P3VhgYQ85u_-9iOwqfDARJIAKMQU3p4SX2fZLffSA6-70eihcTKq0btTm7vQQTOMjLJnqUiyqrBzdbRQbqpdIyV7CfL_wsbSY8s4j_DyyafD6-EVosVJkoq&uach=WyJXaW5kb3dzIiwiMTAuMCIsIng4NiIsIiIsIjkxLjAuNDQ3Mi4xMjQiLFtdLG51bGwsbnVsbCxudWxsXQ..&tt_state=W3siaXNzdWVyT3JpZ2luIjoiaHR0cHM6Ly9hZHNlcnZpY2UuZ29vZ2xlLmNvbSIsInN0YXRlIjo2fSx7Imlzc3Vlck9yaWdpbiI6Imh0dHBzOi8vYXR0ZXN0YXRpb24uYW5kcm9pZC5jb20iLCJzdGF0ZSI6N31d&dt=1624637338460&bpp=5&bdt=27397&idt=6&shv=r20210623&cbv=%2Fr20190131&ptt=9&saldr=aa&abxe=1&cookie=ID%3Dd3ccbde22b015661-227ff67cfbc90027%3AT%3D1624637339%3ART%3D1624637339%3AS%3DALNI_MZc-Vx0MHEky4dF8tfsxrbLx2tmrg&prev_fmts=0x0%2C521x280%2C521x280%2C521x280%2C300x240&nras=6&correlator=4245155348771&frm=20&pv=1&ga_vid=467730660.1624637337&ga_sid=1624637338&ga_hid=779496252&ga_fc=0&u_tz=420&u_his=1&u_java=0&u_h=768&u_w=1366&u_ah=728&u_aw=1366&u_cd=24&u_nplug=3&u_nmime=4&adx=304&ady=2499&biw=1349&bih=568&scr_x=0&scr_y=369&eid=31060973%2C42531225%2C21067496&oid=3&pvsid=3003355304163953&pem=942&eae=0&fc=1408&brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C568&vis=1&rsz=%7C%7Cs%7C&abl=NS&fu=128&bc=31&ifi=5&uci=a!5&btvi=5&fsb=1&xpc=Xxg224JHom&p=https%3A//www.rmoljabar.id&dtd=17757\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allowfullscreen=\"true\" trusttoken=\"{\"type\":\"send-redemption-record\",\"issuers\":[\"https://adservice.google.com\"],\"refreshPolicy\":\"none\",\"signRequestData\":\"include\",\"includeTimestampHeader\":true,\"additionalSignedHeaders\":[\"sec-time\",\"Sec-Redemption-Record\"],\"additionalSigningData\":\"eyJ1cmwiOiJodHRwczovL3d3dy5ybW9samFiYXIuaWQvZHByZC1rYWJ1cGF0ZW4tY2lyZWJvbi1hbG9rYXNpa2FuLXNlYmFnaWFuLWFuZ2dhcmFuLXBva2lyLXVudHVrLWF0YXNpLWJhbmppci13YWxlZCJ9\"}\" allow=\"conversion-measurement\" data-google-container-id=\"a!5\" data-google-query-id=\"CID88eSVs_ECFTjPuwgdPYwGzg\" data-load-complete=\"true\" style=\"max-width: 100%; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 521px; height: 0px;\"></iframe></ins></ins></ins></div><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px;\">Untuk mengatasi pendangkalan sungai Ciberes, Nana mendorong Pemkab Cirebon melakukan pengangkatan sedimen lumpur. Ia mendoroong Pemkab berkordinasi dengan Pemkab Kuningan yang berada di wilayah hulu sungai.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \"Open Sans\", \"Helvetica Neue\", sans-serif; font-size: 17px;\">“Diharapkan penyelesaian masalah banjir tahunan ini bisa dikordinasikan dengan Pemprov Jabar dan Pemda Kuningan juga BBWS untuk  bersama-sama dalam cari solusinya, “ demikian Nana.</p>', 'image_750x_603a84b6dbe3b.jpg', 14, 9, 'publish'),
(9, '2020-12-25 13:52:26', 'Warga Ciuyah Waled Berswadya Perbaiki Jalan Poros Kabupaten Cirebon', 'warga-ciuyah-waled-berswadya-perbaiki-jalan-poros-kabupaten-cirebon', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">Sudah tiga bulan ini jalan penghubung utama Desa Ciuyah-Ambit Kecamatan Waled Kabupaten Cirebon amblas dan sangat membahayakan keselamatan masyarakat.<span style=\"font-size: 1rem;\">Demikian dikatakan Kepala Desa Desa Ciuyah Waled Cirebon, Wasminta kepada media online&nbsp;</span><a href=\"https://www.rakyatjabarnews.com/\" style=\"background-color: rgb(255, 255, 255); font-size: 1rem; color: rgb(255, 87, 34); transition: all 0.25s ease 0s;\">rakyatjabarnews.com</a><span style=\"font-size: 1rem;\">&nbsp;sesaat lalu melalui sambungan selulernya, pada Selasa (6/4/2021) malam.</span></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">Wasminta mengklaim jika perbaikan pada jalan yang amblas tersebut dikerjakan secara swadaya oleh masyarakat Ciuyah dan juga Ambit, karena selama 3 bulan tidak ada perbaikan dari Pemerintah Kabupaten Cirebon (Dinas PUPR).</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">“Perbaikan jalan poros Kabupaten ini sebagai upaya preventif, agar tidak menimbulkan masalah yang lebih besar, karena jika dibiarkan dan tidak segera diperbaiki dapat memutus akses transportasi masyarakat Ciuyah -Ambit Waled,” Kata Kelapa Desa Ciuyah tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">Wasminta berharap proposal perbaikan jalan yang sudah dikirimkan dari 3 bulan yang lalu dapat direalisasikan oleh pemerintah Daerah.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">Sementara itu, Sekretaris Desa setempat, Sutara mengatakan semua bahan bahan material untuk perbaikan jalan merupakan sumbang dari Kepala Desa Ciuyah, karena anggaran dari Dana Desa (DD) tidak bisa dialokasikan pada jalan Poros Kabupaten Cirebon.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">“Jadi ini murni swadaya, tenaga dari warga dan material dari sumbang pribadi Pa Kuwu Ciuyah,” ungkapnya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">Tokoh masyarakat lainnya, Warsan (60) mengaku sangat kecewa kepada Pemerintah Daerah Kabupaten Cirebon khususnya Dinas PUPR yang membiarkan kerusakan jalan yang menjadi penghubung antara Desa Ciuyah-Ambit Waled.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">“Ini masalahnya Pemerintah daerah tidak merespon, padahal kerusakan jalan ini sangat mengganggu sekali dan juga sangat membahayakan pada saat malam hari,” ungkap Warsan.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">Warsan berharap Pemerintah Daerah Kabupaten Cirebon memperhatikan jalan-jalan yang hancur (rusak).</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">“Tolong Pa Bupati Cirebon segera merespon,” tutupnya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">(ymd)</p>', 'IMG-20210407-WA0001.jpg', 14, 9, 'publish'),
(26, '2021-06-23 13:41:15', 'Vaksinasi Covid-19 Desa Ciuyah', 'vaksinasi-covid-19-desa-ciuyah', '<p>Pemerintahan Desa Ciuyah berhasil melakukan kegiatan vaksinasi di Desa Ciuyah pada tanggal 23 juni 2021. Untuk mencegahnya penyebaran virus corona ini kita diharuskan melakukan vaksinasi supaya penyebaran virus corona tersebut tidak menyebar lebih lanjut kepada masyarakat. Dengan demikian maraknya virus corona di Indonesia ini udah lebih dari 1 juta jiwa yang terkena covid-19. Masyarakat Desa Ciuyah ini mereka antusias untuk melakukan vaksinasi karena mereka menyadari bahwa untuk mencegah virus tersebut harus bisa dicegah. Maka dari itu kepada masyarakat Desa Ciuyah jangan lupa selalu mematuhi protokol kesehatan agar dapat tercegah dari bahayanya virus corona ini.</p>', 'IMG-20210623-WA0015.jpg', 14, 9, 'publish'),
(27, '2021-06-25 23:26:21', 'Terancam Terisolasi, PPDI Minta Bupati Cirebon Dan DPRD Perbaiki Jalan Penghubung Desa Ciuyah-Ambit', 'terancam-terisolasi-ppdi-minta-bupati-cirebon-dan-dprd-perbaiki-jalan-penghubung-desa-ciuyah-ambit', '<p><span style=\"color: rgb(50, 50, 51); font-weight: 700;\">Nasib ribuan warga yang bermukim di Desa Ciuyah-Ambit Kecamatan Waled Kabupaten Cirebon terancam terisolasi jika jalan penghubung satu-satunya di Desa Ciuyah terputus.&nbsp;</span><span style=\"color: rgb(50, 50, 51); font-size: 1rem;\"><br></span></p><p><span style=\"color: rgb(50, 50, 51); font-size: 1rem;\">Demikian dikatakan Sekretaris Persatuan Perangkat Desa Indonesia (PPDI) Kabupaten Cirebon, Sutara pada&nbsp;</span><em style=\"color: rgb(50, 50, 51); font-size: 1rem;\">Kantor Berita RMOLJabar</em><span style=\"color: rgb(50, 50, 51); font-size: 1rem;\">, Selasa (12/1).&nbsp;</span><br></p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \" open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\">Sutara mengatakan, dengan curah hujan yang tinggi dalam pekan terakhir mengakibatkan kondisi jalan Ciuyah-Ambit Kecamatan Waled amblas. Sehingga,dengan rusaknya infrastruktur vital tersebut para pemangku kebijakan di Kabupaten Cirebon dapat memperhatikan nasib warga di Kecamatan Waled.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \" open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\">\"Kami berharap Bupati dan Ketua Dewan serta Dinas terkait bisa sigap untuk segera memperbaiki kondisi jalan yang menghubungkan Desa Ciuyah dan Desa Ambit di Kecamatan Waled dan satu Desa di perbatasan Kabupaten Kuningan,\" ujarnya.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \" open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\">Saat ini, dengan kondisi jalan yang amblas hanya kendaraan roda dua (motor) yang bisa lewat, adapun untuk kendaraan roda empat tidak bisa melewati karena khawatir jalan tersebut ambruk.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \" open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\">Selain itu, dirinya berharap kepada para anggota DPRD dapat memperhatikan kondisi jalan penghubung satu-satunya bagi warga Desa di perbatasan Kecamatan Waled Kabupaten Cirebon dengan Kabupaten Kuningan tersebut.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(50, 50, 51); font-family: \" open=\"\" sans\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 17px;\"=\"\">“Kami juga berharap ada kepedulian dari Anggota Dewan Dapil 6,\" pungkasnya.</p><p><br></p>', 'image_750x_5ffd80f9095dc.jpg', 14, 9, 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pekerja`
--

CREATE TABLE `data_pekerja` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `pendidikan_terakhir` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pekerja`
--

INSERT INTO `data_pekerja` (`id`, `nama_lengkap`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `jabatan`, `pendidikan_terakhir`, `foto`) VALUES
(2, 'Wasminta', '1963-02-20', 'Cirebon', 'Laki-laki', 'Kuwu Ciuyah', 'SLTP/Sederajat', 'WASMINTA_KUWU.jpg'),
(3, 'Sutara', '1972-03-26', 'Cirebon', 'Laki-laki', 'Sekretaris Desa', 'SLTA/Sederajat', 'SUTARA.jpg'),
(4, 'Didi Nurjadhi, Amd', '1972-01-17', 'Cirebon', 'Laki-laki', 'Kasi Pemerintahan', 'D.III', 'DIDI_NURJADHI.jpg'),
(5, 'Ali Mahdudin', '1979-08-14', 'Cirebon', 'Laki-laki', 'Kasi Pelayanan', 'SLTA/Sederajat', 'ALI_MAHDUDIN.jpg'),
(6, 'Pathi', '1969-11-05', 'Cirebon', 'Laki-laki', 'Kasi Kesejahteraan', 'SLTA/Sederajat', 'PATHI.jpg'),
(7, 'Ahmadi', '1981-10-01', 'Cirebon', 'Laki-laki', 'Kaur Umum dan Tata Usaha', 'SLTA/Sederajat', 'AHMADI.jpg'),
(8, 'Karto', '1971-04-01', 'Cirebon', 'Laki-laki', 'Kaur Keuangan', 'SLTA/Sederajat', 'KARTO.jpg'),
(9, 'Achmad Jaeni', '1982-01-16', 'Cirebon', 'Laki-laki', 'Kaur Perencanaan', 'D.III', 'ACHMAD_JAENI.jpg'),
(10, 'Kusin', '1966-02-18', 'Cirebon', 'Laki-laki', 'Kepala Blok I', 'SLTA/Sederajat', 'KUSIN.jpg'),
(11, 'Moeh. Alamsyah', '1980-01-05', 'Cirebon', 'Laki-laki', 'Kepala Blok II', 'SLTA/Sederajat', 'MOEH_ALAMSYAH.jpg'),
(12, 'Agus Ruli', '1998-07-13', 'Cirebon', 'Laki-laki', 'Kepala Blok III', 'SLTA/Sederajat', 'AGUS_RULI.jpg'),
(13, 'Caspin', '1985-06-20', 'Cirebon', 'Laki-laki', 'Kepala Blok IV', 'SLTA/Sederajat', 'CASPIN.jpg'),
(14, 'Siti Rokayah', '1993-12-14', 'Cirebon', 'Perempuan', 'Staff', 'SLTA/Sederajat', 'SITI_ROKAYAH.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pekerjaan`
--

CREATE TABLE `data_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pekerjaan`
--

INSERT INTO `data_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'Belum/Tidak Bekerja'),
(2, 'Mengurus Rumah Tangga'),
(3, 'Pelajar/Mahasiswa'),
(4, 'Pensiunan'),
(5, 'Pegawai Negeri Sipil'),
(6, 'Tentara Nasional Indonesia'),
(7, 'Kepolisian RI'),
(8, 'Perdagangan'),
(9, 'Petani/Pekebun'),
(10, 'Peternak'),
(11, 'Nelayan/Perikanan'),
(12, 'Industri'),
(13, 'Konstruksi'),
(14, 'Transportasi'),
(15, 'Karyawan Swasta'),
(16, 'Karyawan BUMN'),
(17, 'Karyawan BUMD'),
(18, 'Karyawan Honorer'),
(19, 'Buruh Harian Lepas'),
(20, 'Buruh Tani/Perkebunan'),
(21, 'Buruh Nelayan/Perikanan'),
(22, 'Buruh Peternakan'),
(23, 'Pembantu Rumah Tangga'),
(24, 'Tukang Cukur'),
(25, 'Tukang Listrik'),
(26, 'Tukang Batu'),
(27, 'Tukang Kayu'),
(28, 'Tukang Sol Sepatu'),
(29, 'Tukang Las/Pandai Besi'),
(30, 'Tukang Jahit'),
(31, 'Tukang Gigi'),
(32, 'Penata Rias'),
(33, 'Penata Busana'),
(34, 'Penterjemah'),
(35, 'Imam Mesjid'),
(36, 'Pendeta'),
(37, 'Pastor'),
(38, 'Wartawan'),
(39, 'Ustadz/Mubaligh'),
(40, 'Juru Masak'),
(41, 'Promotor Acara'),
(42, 'Anggota DPR-RI'),
(43, 'Anggota DPD'),
(44, 'Anggota BPK'),
(45, 'Presiden'),
(46, 'Wakil Presiden'),
(47, 'Anggota Mahkamah Konstitusi'),
(48, 'Anggota Kabinet/Kementrian'),
(49, 'Duta Besar'),
(50, 'Gubernur'),
(51, 'Wakil Gubernur'),
(52, 'Bupati'),
(53, 'Wakil Bupati'),
(54, 'Walikota'),
(55, 'Wakil Walikota'),
(56, 'Anggota DPRD Provinsi'),
(57, 'Anggota DPRD Kabupaten/Kota'),
(58, 'Dosen'),
(59, 'Guru'),
(60, 'Pilot'),
(61, 'Pengacara'),
(62, 'Notaris'),
(63, 'Arsitek'),
(64, 'Akuntan'),
(65, 'Konsultan'),
(66, 'Dokter'),
(67, 'Bidan'),
(68, 'Perawat'),
(69, 'Apoteker'),
(70, 'Psikiater/Psikolog'),
(71, 'Penyiar Televisi'),
(72, 'Penyiar Radio'),
(73, 'Pelaut'),
(74, 'Peneliti'),
(75, 'Sopir'),
(76, 'Pialang'),
(77, 'Paranormal'),
(78, 'Pedagang'),
(79, 'Perangkat Desa'),
(80, 'Kepala Desa'),
(81, 'Biarawati'),
(82, 'Wiraswasta'),
(83, 'Penata Rambut'),
(84, 'Mekanik'),
(85, 'Seniman'),
(86, 'Tabib'),
(87, 'Paraji'),
(88, 'Perancang Busana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_nama` varchar(250) NOT NULL,
  `galeri_slug` varchar(250) NOT NULL,
  `galeri_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_nama`, `galeri_slug`, `galeri_foto`) VALUES
(3, 'Logo ITB', 'logo-itb', 'ITB.jpg'),
(4, 'Logo UGM', 'logo-ugm', 'ugm.png'),
(5, 'Logo UI', 'logo-harvard', 'ui1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `halaman_id` int(11) NOT NULL,
  `halaman_judul` varchar(255) NOT NULL,
  `halaman_slug` varchar(255) NOT NULL,
  `halaman_konten` longtext NOT NULL,
  `halaman_sampul` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`halaman_id`, `halaman_judul`, `halaman_slug`, `halaman_konten`, `halaman_sampul`) VALUES
(5, 'Profil Desa Ciuyah', 'profil-desa-ciuyah', '<h2>Sejarah Desa</h2>\r\n\r\n<p>Desa Ciuyah adalah sebuah desa pemekaran dari Desa Ambit sebagai Desa induknya, desa Ciuyah dimekarkan pada tahun 1982 pada masa kepemimpinan Kepala Desa Bapak. ICHWAN&nbsp; pada saat itu Undang-undang yang berlaku adalah Undang-Undang nomor 5 tahun 1979 tentang Pemerintahan Desa sebagai Penjabat Kepala Desa adalah Bapak ALKOMAH yaitu seorang Perangkat Desa dari Desa Induk ( Desa Ambit ), masa jabatan beliau dari tahun 1982 sampai dengan 1984 pada masa jabatan beliau masa pembenahan baik administrasi kedesaan maupun sarana dan prasarana untuk berjalannya sebuah desa yang baru saja lahir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada tahun 1984 tepatnya pada hari Rabu tanggal 10 Oktober tahun 1984 Desa Ciuyah melaksanakan Pemilihan Kepala Desa sebagai calon pimpinan Pemerintahan Desa untuk memilih seorang Kepala Desa definitif pada saat itu. Dalam pemilihan secara dipilih oleh rakyat Desa Ciuyah dengan tanda gambar ( Bendera ) berdasarkan UU Nomor 5 Tahun 1979 dengan masa jabatan 8 ( delapan ) tahun. Dalam pemilihan tersebut Kepala Desa terpilih yaitu Bapak KARLAYA untuk masa jabatan 1984 s/d 1992.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada tahun 1992 persiapan untuk penyelenggaraan Pemilihan Kepala Desa belum siap pada akhirnya sebagai pelaksana Kepala Desa mengangkat seorang Perangkat Desa yaitu Bapak FATHUL BARI (Sekretaris Desa) sebagai Pejabat Pelaksana Harian Kepala Desa Ciuyah (Plh. Kepala Desa ), untuk membenahi administrasi dan perjalanan pemerintahan serta mempersiapkan pemilihan Kepala Desa.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Plh. Kepala Desa bapak FATHUL BARI menjabat selama 1,6 (satu koma enam) tahun yaitu dari tahun 1992 sampai dengan 1994. Pada tahun 1994 tepatnya hari Minggu tanggal 20 Maret 1994 Desa Ciuyah mengadakan Pemilihan Kepala Desa definitive yang langsung dipilih rakyat dengan tanda gambar (bendera) berdasar Undang-Undang Nomor 5 tahun 1979 dengan masa jabatan 8 (delapan) tahun . Dalam pemilihan tersebut Kepala Desa terpilih yaitu Bapak MUTKIN untuk masa jabatan tahun 1994 sampai dengan 2002. Dalam kepemimpinan Bapak MUTKIN selesai sampai akhir masa jabatan selama 8 (delapan) tahun.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada kurun waktu kepemimpinan Kepala Desa Bapak MUTKIN pada tahun 2001 terjadi perubahan undang-Undang dari Undang-Undang Nomor 5 tahun 1979 Tentang Pemerintahan Desa kepada Undang-Undang Nomor 22 Tahun 1999 Tentang Pemerintahan Daerah, mengatur juga tentang Pemerintahan Desa yaitu pada BAB XI dan Pasal 93 sampai dengan Pasal 111. Pada perubahan tersebut banyak perubahan-perubahan yang mendasar bila dibanding dengan UU Nomor 5 Tahun 1979 antara lain Pemerintahan Desa bukan lagi mrupakan organisasi Pemerintahan terendah dibawah Camat sehingga Kepala Desa tidak lagi bertanggungjawab kepada Bupati melalui Camat, melainkan bertanggungjawan kepada Wakil Rakyat melalui Badan Permusyawaratan Desa ( BPD ) dan menyelenggarakan laporan mengenai pelaksanaan tugasnya kepada Bupati, dengan demikian Camat tidak mempunyai hubungan Hierarki dengan Desa. Lembaga Musyawarah Desa dirubah menjadi Badan Perwakilan Desa yang berfungsi sebagai Lembaga Legislatif dan Pengawasan dalam pelaksanaan Peraturan Desa. Lebih lanjut berdasarkan Pasal 111 ditetapkan Peraturan Pemerintah Nomor 76 Tahun 2001 tentang pedoman Umum Pengaturan Mengenai Desa.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada tahun 2002 tepatnya pada hari Senin tanggal 3 bulan Juli tahun 2002 Desa Ciuyah mengadakan Pemilihan Kepala Desa depnitif,&nbsp; yang langsung dipilih oleh rakyat dengan tanda gambar buah-buahan. Pemilihan Kepala Desa pada saat ini berdasarkan Undang-Undang No 22 Tahun 1999 tentang pemerintahan Daerah dengan masa jabatan 5 tahun. Dalam Pemilihan ini dimenangkan oleh Bapak CARSADI untuk periode 2002 sampai dengan 2007. Pada saat itu istilah Kepala Desa diatur oleh Peraturan Daerah untuk Kabupaten Cirebon dinamakan KUWU sesuai asal-usul Pemimpin Desa di Kabupaten Cirebon. Seiring dengan perkembangan situasi demokrasi para Kuwu membentuk Forum Kuwu dalam hal ini Forum Kuwu mengusulkan masa jabatan yang 5 (lima) tahun menjadi 10 ( sepuluh ) tahun akhirnya dikabulkan oleh Pemerintah Daerah Kabupaten Cirebon dengan perubahan Peraturan yang ada, akhirnya Kuwu yang semula periode 2002-2007 5 ( lima ) tahun menjadi 2002-2016 10 ( sepuluh ) tahun.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada masa kepemimpinan Bapak CARSADI terjadi adanya perubahan Undang-Undang Nomor 22 Tahun 1999 Pemerintahan Daerah dengan seluruh peraturan pelaksanaannya ternyata tidak sesuai dengan perkembangan keadaan, Ketatanegaraan, dan tuntutan penyelenggaraan Otonomi Daerah. Maka UU Nomor 22 Tahun 1999 inipun direvisi dan diganti dengan UU Nomor 32 Tahun 2004 Tentang Pemerintahan Daerah. Dalam UU Nomor 32 Tahun 2004 pengaturan mengenai desa terdapat pada BAB XI Pasal 200 s/d Pasa 216, sebagai tindak lanjut ketentuan Pasal 216, ditetapkanlah PP No 72 Tahun 2005 Tentang Desa yang merupakan pedoman dalam penyelenggaraan Pemerintahan Desa.</p>', 'a1.jpg'),
(8, 'Visi dan Misi', 'visi-dan-misi', '<h3><strong>VISI:</strong></h3>\r\n\r\n<p>Terciptanya Desa Ciuyah Yang Terunggul dan Desa Maju di kabupaten Cirebon melalui pembangunan dibidang Pertanian dan Pemberdayaan Sumberdaya Manusia berdasarkan Norma Agama dan Norma Hukum yang berlaku di Negara Kesatuan Republik Indonesia.</p>\r\n\r\n<h3><strong>MISI:</strong></h3>\r\n\r\n<ol>\r\n	<li>Mewujudkan Masyarakat yang sadar dan taat kepada hukum.</li>\r\n	<li>Meningkatkan kwalitas dan kwantitas serta mengembangkan sumber daya alam di Desa khususnya bidang pertanian sebagai sektor unggulan.</li>\r\n	<li>Meningkatkan tata kehidupan bermasyarakat yang harmonis dan merangsang untuk hidup lebih maju dan mandiri.</li>\r\n	<li>Meningkatkan kwalitas pendidikan dan kesehatan yang merata dan terjangkau bagi masyarakat.</li>\r\n	<li>Mewujudkan&nbsp;pengembangan pusat keterampilan masyarakat desa.</li>\r\n	<li>Meningkatkan kinerja lembaga pemerintahan desa.</li>\r\n	<li>Mewujudkan kebijakan pemerintahan desa yang berpihak kepada kepentingan masyarakat.&nbsp;</li>\r\n</ol>', ''),
(11, 'Demografi', 'demografi', '<h3><strong>Geografis</strong></h3>\r\n\r\n<p>Desa Ciuyah terletak di sebelah utara Kecamatan Waled dengan jarak tempuh kendaraan bermotor &plusmn; 15 menit dan terletak disebelah timur Ibu Kota kabupaten Cirebon dengan jarak tempuh&nbsp; &plusmn; 90 menit dengan jarak&nbsp; &plusmn;45 km. Daratan desa Ciuyah termasuk daratan rendah dengan luas 251,796 Ha terdiri dari tanah darat ( Pemukiman Penduduk, Perkantoran, Pekuburan, dll )&nbsp; &plusmn; 100,350 Ha dan Tanah sawah &plusmn;151,446 Ha, tanah sawah Desa Ciuyah cukup subur dan baik.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Desa Ciuyah terdiri dari 4 Dusun, 8 RW dan 27 RT dengan kepadatan penduduk cukup padat yaitu, 7.537&nbsp; Jiwa yang terdiri atas 3.889 Laki-laki , 3.648 Perempuan dengan jumlah Kepala Keluarga 2.282Kepala Keluarga.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berdasarkan letak Geografisnya Desa Ciuyah Berada pada posisi dalam wilayah 108&ordm; 40&rsquo; -&nbsp; 108&ordm; 48&rsquo; Bujur Timur dan 6&ordm; 30&rsquo; -&nbsp; 7&ordm; 00&rsquo; Lintang Selatan, yang bertepatan dengan :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sebelah Utara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Gunungsari</p>\r\n\r\n<p>Sebelah Barat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Kubang Deleg Kec. Karangwareng</p>\r\n\r\n<p>Sebelah Selatan&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Wanasaraya Kab. Kuningan</p>\r\n\r\n<p>Sebelah Timur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Ambit</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Desa Ciuyah berdasarkan Topologi termasuk daratan rendah yang memiliki letak ketinggian &plusmn; 7 m dari permukaan laut dengan jenis tanah Litosal, Aluvial, Grumosal, Mediteran.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Faktor iklim dan cuaca hujan cukup seimbang bahwa antara musim hujan dan panas 4 &ndash; 6 bulan musim panas dan 4 &ndash; 6 bulan musim hujan, walau dengan curah hujan yang cukup tanah pesawahan Desa Ciuyah dan dikelilingi irigasi yang baik tetapi ketika musim palawija atau sawah kedua kadang kekurangan air.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kebutuhan air minum, mandi dan cuci bersumber dari air tanah dengan sumur gali dan jika pada musim kemarau tia sebagian warga ( Blok I dan II) kekurangan air bersih.</p>', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_slug`) VALUES
(9, 'Berita', 'berita'),
(10, 'Pertanian', 'pertanian'),
(11, 'Peternakan', 'peternakan'),
(15, 'Produk UKM', 'produk-ukm'),
(16, 'Seni dan Budaya', 'seni-dan-budaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `pesan`, `status`, `tanggal`) VALUES
(69, 'sdsdsds', 'dsdsds@wqw', 'adsadsadada', 'adaddadad adadsadaada', 'dibaca', '2021-05-28 15:38:14'),
(90, 'tes', 'tes@gmail.com', 'tes', 'tes', '', '2021-07-01 11:11:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `umur` int(3) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `hub_keluarga` varchar(100) NOT NULL,
  `perkawinan` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `kk`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `umur`, `agama`, `hub_keluarga`, `perkawinan`, `pendidikan`, `pekerjaan`, `nama_ibu`, `nama_ayah`, `alamat`, `rt`, `rw`) VALUES
(5, '3209011102067134', '3209014107830483', 'MIMIN MAESAROH', 'CIREBON', '1983-07-01', 'PEREMPUAN', 37, 'ISLAM', 'KEPALA KELUARGA', 'CERAI HIDUP', 'TAMAT SD/SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'DERTI', 'NADI', 'BLOK II', 1, 3),
(10, '3209011102067134', '3209016209030004', 'SOFIA MUNAYA', 'CIREBON', '2003-09-22', 'PEREMPUAN', 17, 'ISLAM', 'ANAK', 'BELUM KAWIN', 'BELUM TAMAT SD/SEDERAJAT', 'BELUM/TIDAK BEKERJA', 'MIMIN MAESAROH', 'UJANG WAHYUDI', 'BLOK II', 1, 3),
(11, '3209012805130004', '3209011606550009', 'NADI', 'CIREBON', '1955-06-24', 'LAKI-LAKI', 65, 'ISLAM', 'KEPALA KELUARGA', 'KAWIN', 'TAMAT SD/SEDERAJAT', 'PETANI/PEKEBUN', 'DATI', 'KARTIM', 'BLOK II', 1, 3),
(12, '3209012805130004', '3209014508640004', 'DERTI', 'CIREBON', '1964-08-05', 'PEREMPUAN', 56, 'ISLAM', 'ISTRI', 'KAWIN', 'TAMAT SD/SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'WARKINAH', 'TARBA', 'BLOK II', 1, 3),
(13, '3209010107090010', '3209012406770004', 'MUILAN', 'KUNINGAN', '1977-06-24', 'LAKI-LAKI', 43, 'ISLAM', 'KEPALA KELUARGA', 'KAWIN', 'SLTA/SEDERAJAT', 'WIRASWASTA', 'KITO', 'TARMIDI', 'BLOK II', 1, 3),
(14, '3209010107090010', '3209015408820009', 'DEDEH ASMINI', 'CIREBON', '1982-08-14', 'PEREMPUAN', 38, 'ISLAM', 'ISTRI', 'KAWIN', 'SLTA/SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'DARTINAH', 'DAWUD', 'BLOK II', 1, 3),
(15, '3209010107090010', '3209011102030007', 'NANDA RIDHO FIRDAUS', 'CIREBON', '2003-02-11', 'LAKI-LAKI', 17, 'ISLAM', 'ANAK', 'BELUM KAWIN', 'BELUM TAMAT SD/SEDERAJAT', 'BELUM/TIDAK BEKERJA', 'DEDEH ASMINI', 'MUILAN', 'BLOK II', 1, 3),
(16, '3209010107090010', '3209016908060002', 'NAILA NABILATUL ZANAH', 'CIREBON', '2006-08-29', 'PEREMPUAN', 14, 'ISLAM', 'ANAK', 'BELUM KAWIN', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'DEDEH ASMINI', 'MUILAN', 'BLOK II', 1, 3),
(17, '3209011507110002', '3209010506840006', 'DIYANTO', 'CIREBON', '1984-06-05', 'LAKI-LAKI', 36, 'ISLAM', 'KEPALA KELUARGA', 'KAWIN', 'TAMAT SD/SEDERAJAT', 'BURUH HARIAN LEPAS', 'WARSI', 'PARYA', 'BLOK II', 1, 3),
(18, '3209011507110002', '3209015908900011', 'TARWINI', 'CIREBON', '1990-09-29', 'PEREMPUAN', 30, 'ISLAM', 'ISTRI', 'KAWIN', 'TAMAT SD/SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'CASMI', 'RASDA', 'BLOK II', 1, 3),
(19, '3209011507110002', '3209012805140002', 'NIZAM NUR RIVKI', 'CIREBON', '2014-05-28', 'LAKI-LAKI', 6, 'ISLAM', 'ANAK', 'BELUM KAWIN', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'DIYANTO', 'TARWINI', 'BLOK II', 1, 3),
(20, '7362', '45234', 'BCJHKKA', 'FSFSS', '2021-03-11', 'LAKI-LAKI', 1, 'ISLAM', 'KEPALA KELUARGA', 'BELUM KAWIN', 'SLTP/SEDERAJAT', 'KARYAWAN BUMD', 'HJHJHH', 'HGGGHGG', 'JHJHJJ', 5, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_kepdes` varchar(255) NOT NULL,
  `sambutan_kepdes` text NOT NULL,
  `foto_kepdes` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `slider_1` varchar(255) NOT NULL,
  `slider_2` varchar(255) NOT NULL,
  `slider_3` varchar(225) NOT NULL,
  `slogan_1` varchar(255) NOT NULL,
  `slogan_2` varchar(255) NOT NULL,
  `slogan_3` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `teks_pembuka` text NOT NULL,
  `tentang` text NOT NULL,
  `jml_penduduk` varchar(255) NOT NULL,
  `jml_penduduk_lk` varchar(255) NOT NULL,
  `jml_penduduk_pr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `deskripsi`, `nama_kepdes`, `sambutan_kepdes`, `foto_kepdes`, `telepon`, `email`, `website`, `alamat`, `logo`, `slider_1`, `slider_2`, `slider_3`, `slogan_1`, `slogan_2`, `slogan_3`, `youtube`, `facebook`, `instagram`, `teks_pembuka`, `tentang`, `jml_penduduk`, `jml_penduduk_lk`, `jml_penduduk_pr`) VALUES
(1, 'Desa Ciuyah', 'Website Informasi Desa Ciuyah', 'Wasminta', 'Kemajuan teknologi membuat segalanya menjadi cepat, menjadi mudah dan menghematkan biaya, tapi teknologi pun tidak semuanya sempurna, karena teknologi mempunyai sisi segi positif dan negatif. Maka dari itu kita mengharuskan untuk menggunakan atau memanfaatkan teknologi dengan sebijak-bijaknya agar melakukan teknologi dengan hal positif dan bijaksana.', 'WASMINTA_KUWU.png', '081395968072', 'pemdesciuyahoke@gmail.com', 'localhost/website_desa', 'Jalan Dangdeur No. 11 Ciuyah Kode Pos 45187', 'logo.png', '1.jpg', '2.jpg', '5.jpg', 'Mari kita wujudkan masyarakat desa ciuyah yang beriman, sehat, cerdas dan sejahtera', 'Meningkatkan kualitas sumber daya manusia yang berakhlakul karimah melalui peningkatan pendidikan agama.', 'Membangun pemerintahan yang baik melalui peningkatan kapasitas Aparatur Pemerintahan Desa', '', '', '', 'Selamat Datang di Website Resmi Desa Ciuyah, Kecamatan Waled Kabupaten Cirebon. Media komunikasi dan transparansi Pemerintah Desa Ciuyah untuk seluruh masyarakat. Menuju era digitalisasi ini kami rakyat dari Desa Ciuyah ingin memajukan desa ke dalam era digitalisasi', 'Desa ciuyah adalah salah satu desa yang berada di perbatasan kabupaten cirebon dengan kabupaten kuningan', '7552', '3900', '3652');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','penulis') NOT NULL,
  `pengguna_status` int(11) NOT NULL,
  `pengguna_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`, `pengguna_foto`) VALUES
(14, 'Admin Desa', 'admin@desa.com', 'admin', '$2y$10$w/8Jfi9xgK9iDNv4DKmk1.I28KUl48p0WgUANIRrfYru4KLNWPfI6', 'admin', 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(17, 'apajareh10@gmail.com', 'DlobOPEli31RU8vC4xoEpP/8zbFa2BcQvvcl3U2ClyM=', 1612928589),
(22, 'admin@desa.com', '3te2WZvD6eNZJPtuJ1fNsD+/Fs4/OMRdsXYP2usC3Fc=', 1614322147),
(45, 'alyabdurohman16@gmail.com', 'FA/aiOi4STHEGJGZnqiz+HfDxUZQ6CvZM2T0jMIGeaM=', 1614351167),
(58, 'alyabdurohman16@gmail.com', 'Sbx/B9lPicyJN020Yktwbtwhs8CHo//g3N3VhO9wzo4=', 1614670032),
(59, 'alyabdurohman16@gmail.com', 'hqbsA3Nc/+9CMt9hmrMtZsbcrw849MGQfb8xmWjrF68=', 1614670474),
(61, 'apajareh10@gmail.com', '4e9qVTTHr8gomITSAJBIMw3S/3IkS6d/tuF23Klh3Gk=', 1615644795),
(62, 'apajareh10@gmail.com', '5YyD65iC0Jjgmnqx+Df/uL9Q83y9Q5X1YC0GxAOdLzs=', 1615644945),
(63, 'naufalfadhillah93@gmail.com', 'cwcx8XaiB0V9b7PeYEDfi0i38A9UFgmoBX0N+FCoAgY=', 1615989876),
(66, 'aliabdurohman16@gmail.com', 'kBRtE3OqLADNuVXVf7xF51BTXG/MAUcMnDlV0FSAq30=', 1624510010),
(67, 'aliabdurohman16@gmail.com', 'lHFJDRFaGledv+PDfLQ68x7I6MIxoIaXhgay4ui4b0M=', 1624510569),
(68, 'aliabdurohman16@gmail.com', '0a9XL1lFqvVGOw1eri2wsuMHWiYdGqAFWMYB8EH8kng=', 1625275567),
(69, 'aliabdurohman16@gmail.com', 'J4eklIihE03Orwqo6Pz+zRH9SfhpHlkBtUooCjbMd2k=', 1625277961);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indeks untuk tabel `data_pekerja`
--
ALTER TABLE `data_pekerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`halaman_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `data_pekerja`
--
ALTER TABLE `data_pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `halaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
