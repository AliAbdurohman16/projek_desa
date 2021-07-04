<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('m_data');
		$this->load->helper('text');

		// cek session yang login,
		// jika session status tidak sama dengan session telah_login, berarti pengguna belum login
		// maka halaman akan di alihkan kembali ke halaman login.
		if ($this->session->userdata('status')!="telah_login") {
			redirect(base_url() . 'login?alert=belum_login');
		}
	}

    public function index()
    {
		$data = [ 
			// Hitung jumlah artikel
			'jumlah_artikel' => $this->m_data->get_data('artikel')->num_rows(),
			// Hitung jumlah kategori
			'jumlah_kategori' => $this->m_data->get_data('kategori')->num_rows(),
			// Hitung jumlah Pegawai
			'jumlah_aparatur' => $this->m_data->get_data('data_pekerja')->num_rows(),
			// Hitung jumlah penduduk
			'pengaturan' => $this->m_data->get_data('pengaturan')->row()
		];

        $data['title'] = 'Dashboard';
        $this->load->view('dashboard/v_header', $data);
        $this->load->view('dashboard/v_index', $data);
        $this->footer();
    }

	public function footer()
	{
		$data['pengaturan'] = $this->m_data->get_data('pengaturan')->row(); 

        $this->load->view('dashboard/v_footer', $data);
	}

	// Halaman Artikel
	public function artikel()
	{
		$data['title'] = 'Artikel';
		$data['artikel'] = $this->db->query("SELECT * FROM artikel, kategori, pengguna WHERE artikel_kategori = kategori_id AND artikel_author = pengguna_id ORDER BY artikel_id DESC")->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_artikel', $data);
		$this->footer();
	}
	// Akhir Halaman Artikel

	// Halaman Artikel Tambah
	public function artikel_tambah()
	{
		$data['title'] = 'Buat Artikel Baru';
		$data['kategori'] = $this->m_data->get_data('kategori')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_artikel_tambah', $data);
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Artikel Tambah

	// Halaman Artikel Aksi
	public function artikel_aksi()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required|is_unique[artikel.artikel_judul]');
		$this->form_validation->set_rules('konten', 'Konten', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		
		// Membuat gambar wajib diisi!
		if (empty($_FILES['sampul']['name'])) {
			$this->form_validation->set_rules('sampul', 'Gambar Sampul', 'trim|required');
		}

		if ($this->form_validation->run() == TRUE) {
			$config = [
				'upload_path' => './gambar/artikel/',
				'allowed_types' => 'gif|jpg|png|jpeg|mp4'
			];

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('sampul')) {
				// mengambil data tentang gambar
				$gambar = $this->upload->data();

				$tanggal = date('Y-m-d H:i:s');
				$judul = $this->input->post('judul');
				$slug = strtolower(url_title($judul));
				$konten = $this->input->post('konten');
				$sampul = $gambar['file_name'];
				$author = $this->session->userdata('id');
				$kategori = $this->input->post('kategori');
				$status = $this->input->post('status');

				$data = [
					'artikel_tanggal' => $tanggal,
					'artikel_judul' => $judul,
					'artikel_slug' => $slug,
					'artikel_konten' => $konten,
					'artikel_sampul' => $sampul,
					'artikel_author' => $author,
					'artikel_kategori' => $kategori,
					'artikel_status' => $status
				];

				$this->m_data->insert_data($data, 'artikel');
				redirect('dashboard/artikel');
			} else {
                $this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());
                redirect('dashboard/artikel_tambah');
			}
		} else {
			$this->artikel_tambah();
		}
		
	}
	// Akhir Halaman Artikel Aksi

	// Halaman Artikel Edit
	public function artikel_edit($id)
	{
		$where = [
			'artikel_id' => $id
		];

		$data = [
			'artikel' => $this->m_data->edit_data($where, 'artikel')->result(),
			'kategori' => $this->m_data->get_data('kategori')->result()
		];

		$data['title'] = 'Edit Artikel';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_artikel_edit', $data);
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Artikel Edit

	// Halaman Artikel Update
	public function artikel_update()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('konten', 'Konten', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

		if ($this->form_validation->run() != false) {
			
			$id = $this->input->post('id');

            $judul = $this->input->post('judul');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');
            $kategori = $this->input->post('kategori');
			$status = $this->input->post('status');
			
			$where = [
				'artikel_id' => $id
			];
                
            $data = [
                'artikel_judul' => $judul,
                'artikel_slug' => $slug,
                'artikel_konten' => $konten,
                'artikel_kategori' => $kategori,
                'artikel_status' => $status
            ];

			$this->m_data->update_data($where, $data, 'artikel');
			
            if (!empty($_FILES['sampul']['name'])) {
				$config = [
					'upload_path' => './gambar/artikel/',
					'allowed_types' => 'gif|jpg|png|jpeg'
				];

				$this->load->library('upload', $config);

                if ($this->upload->do_upload('sampul')) {

					// Mengambil data tentang gambar
					$gambar = $this->upload->data();

					$data = [
						'artikel_sampul' => $gambar['file_name']
					];

					$this->m_data->update_data($where, $data, 'artikel');

					redirect('dashboard/artikel');
                } else {
					$this->form_validation->set_message('sampul', $data['gambar_error'] = $this->upload->display_errors());
					
					$data = [
						'artikel' => $this->m_data->edit_data($where, 'artikel')->result(),
						'kategori' => $this->m_data->get_data('kategori')->result()
					];
					$data['title'] = 'Edit Artikel';
					$this->load->view('dashboard/v_header', $data);
					$this->load->view('dashboard/v_artikel_edit', $data);
					$this->load->view('dashboard/v_footer');
				}
            } else {
				redirect('dashboard/artikel');
			}
        } else {
			$id = $this->input->post('id');
			$where = [
				'artikel_id' => $id
			];

			$data = [
				'artikel' => $this->m_data->edit_data($where, 'artikel')->result(),
				'kategori' => $this->m_data->get_data('kategori')->result()
			];
			$data['title'] = 'Edit Artikel';
			$this->load->view('dashboard/v_header', $data);
			$this->load->view('dashboard/v_artikel_edit', $data);
			$this->load->view('dashboard/v_footer');
		}
	}
	// Akhir Halaman Artikel Update

	// Halaman Artikel Hapus
	public function artikel_hapus($id)
	{
		$where = [
			'artikel_id' => $id
		];

		$this->m_data->delete_data($where, 'artikel');
		redirect('dashboard/artikel');
	}
	// Akhir Halaman Artikel Hapus

	// Halaman Kategori
	public function kategori()
	{
		$data['title'] = 'Kategori';
		$data['kategori'] = $this->m_data->get_data('kategori')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_kategori', $data);
		$this->footer();
	}
	// Akhir Halaman Kategori

	// Halaman Kategori Tambah
	public function kategori_tambah()
	{
		$data['title'] = 'Buat Kategori Baru';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_kategori_tambah');
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Kategori Tambah

	// Halaman Kategori Aksi
	public function kategori_aksi()
	{
		$this->form_validation->set_rules('kategori', 'Nama Kategori', 'required');

		if ($this->form_validation->run() != false) {

			$kategori = $this->input->post('kategori');

			$data = [
				'kategori_nama' => $kategori,
				'kategori_slug' => strtolower(url_title($kategori))
			];

			$this->m_data->insert_data($data, 'kategori');

			redirect(base_url('dashboard/kategori'));

		}else {
			$this->kategori_tambah();
		}
		
	}
	// Akhir Halaman Kategori Aksi

	// Halaman Kategori Edit
	public function kategori_edit($id)
	{
		$where = [
			'kategori_id' => $id
		];

		$data['title'] = 'Edit Kategori';
		$data['kategori'] = $this->m_data->edit_data($where, 'kategori')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_kategori_edit', $data);
		$this->load->view('dashboard/v_footer'); 
	}
	// AkhirHalaman Kategori Edit

	// Halaman Kategori Update
	public function kategori_update()
	{
		$this->form_validation->set_rules('kategori', 'Nama Kategori', 'trim|required');
		
		if ($this->form_validation->run() != false) {

			$id = $this->input->post('id');
			$kategori = $this->input->post('kategori');

			$where = [
				'kategori_id' => $id
			];

			$data = [
				'kategori_nama' => $kategori,
				'kategori_slug' => strtolower(url_title($kategori))
			];

			$this->m_data->update_data($where, $data, 'kategori');

			redirect(base_url('dashboard/kategori'));

		} else {
			$id = $this->input->post('id');
			$where = [
				'kategori_id' => $id
			];
	
			$data['title'] = 'Edit Kategori';
			$data['kategori'] = $this->m_data->edit_data($where, 'kategori')->result();
			$this->load->view('dashboard/v_header', $data);
			$this->load->view('dashboard/v_kategori_edit', $data);
			$this->load->view('dashboard/v_footer'); 
		}
	}
	// Akhir Halaman Kategori Update
	
	// Halaman Kategori Hapus
	public function kategori_hapus($id) {
		$where = [
			'kategori_id' => $id
		];

		$this->m_data->delete_data($where, 'kategori');

		redirect(base_url('dashboard/kategori'));
	}
	// Akhir Halaman Kategori Hapus

	// Halaman Pages
	public function pages()
	{
		$data['title'] = 'Pages/Halaman';
		$data['halaman'] = $this->m_data->get_data('halaman')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pages', $data);
		$this->footer();
	}
	// Akhir Halaman Pages

	// Halaman Pages Tambah
	public function pages_tambah()
	{
		$data['title'] = 'Buat Halaman Baru';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pages_tambah');
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Pages Tambah
	
	// Halaman Pages Aksi
	public function pages_aksi()
	{
		$this->form_validation->set_rules('judul', 'Judul Halaman', 'trim|required|is_unique[halaman.halaman_judul]');
		$this->form_validation->set_rules('konten', 'Konten Halaman', 'trim|required');

		if ($this->form_validation->run() !=  false) {

            $judul = $this->input->post('judul');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');

            $data = [
                'halaman_judul' => $judul,
                'halaman_slug' => $slug,
                'halaman_konten' => $konten
            ];

            $this->m_data->insert_data($data, 'halaman');

            if (!empty($_FILES['sampul']['name'])) {
                $config = [
                    'upload_path' => './gambar/kategori/',
                    'allowed_types' => 'gif|jpg|png|jpeg'
                ];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('sampul')) {

                    // Mengambil data tentang gambar
                    $gambar = $this->upload->data();

                    $data = [
                        'halaman_sampul' => $gambar['file_name']
                    ];

                    $this->m_data->insert_data($data, 'halaman');
                    redirect('dashboard/pages');
                } else {
                    $this->pages_tambah();
                }
            } else {
				redirect('dashboard/pages');
			}
        } else {
            $this->pages_tambah();
        }
	}
	// Akhir Halaman Pages Aksi
	
	// Halaman Pages Edit
	public function pages_edit($id)
	{
		$where = [
			'halaman_id' => $id
		];

		$data['title'] = 'Edit Halaman';
		$data['halaman'] = $this->m_data->edit_data($where, 'halaman')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pages_edit', $data);
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Pages Edit
	
	// Halaman Pages Update
	public function pages_update()
	{
        $this->form_validation->set_rules('judul', 'Judul Halaman', 'trim|required');
        $this->form_validation->set_rules('konten', 'Konten Halaman', 'trim|required');

        
        if ($this->form_validation->run() !=  false) {
            $id = $this->input->post('id');

            $judul = $this->input->post('judul');
            $slug = strtolower(url_title($judul));
            $konten = $this->input->post('konten');

            $where = [
                'halaman_id' => $id
            ];

            $data = [
                'halaman_judul' => $judul,
                'halaman_slug' => $slug,
                'halaman_konten' => $konten
            ];

            $this->m_data->update_data($where, $data, 'halaman');

            if (!empty($_FILES['sampul']['name'])) {
                $config = [
                    'upload_path' => './gambar/kategori/',
                    'allowed_types' => 'gif|jpg|png|jpeg'
                ];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('sampul')) {

                    // Mengambil data tentang gambar
                    $gambar = $this->upload->data();

                    $data = [
                        'halaman_sampul' => $gambar['file_name']
                    ];

                    $this->m_data->update_data($where, $data, 'halaman');
                    redirect('dashboard/pages');
                } else {
                    $id = $this->input->post('id');
                    $where = [
                        'halaman_id' => $id
                    ];

                    $data['title'] = 'Edit Halaman';
                    $data['halaman'] = $this->m_data->edit_data($where, 'halaman')->result();
                    $this->load->view('dashboard/v_header', $data);
                    $this->load->view('dashboard/v_pages_edit', $data);
                    $this->load->view('dashboard/v_footer');
                }
            } else {
				redirect('dashboard/pages');
			}
        } else {
            $id = $this->input->post('id');
            $where = [
                'halaman_id' => $id
            ];

			$data['title'] = 'Edit Halaman';
            $data['halaman'] = $this->m_data->edit_data($where, 'halaman')->result();
            $this->load->view('dashboard/v_header', $data);
            $this->load->view('dashboard/v_pages_edit', $data);
            $this->load->view('dashboard/v_footer');
        }
	}
	// Akhir Halaman Pages Update
	
	// Halaman Pages Hapus
	public function pages_hapus($id)
	{
		$where = [
			'halaman_id' => $id
		];
		 $this->m_data->delete_data($where, 'halaman');
		 
		 redirect('dashboard/pages');
	}
	// Akhir Halaman Pages Hapus

	// Halaman Aparatur
	public function data_pekerja()
	{
		$data['title'] = 'Data Aparatur';
		$data['data_pekerja'] = $this->m_data->get_data('data_pekerja')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_data_pekerja', $data);
		$this->footer();
	}

	public function data_pekerja_tambah()
	{
		$data['title'] = 'Tambah Data Aparatur';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_data_pekerja_tambah');
		$this->load->view('dashboard/v_footer');
	}

	public function data_pekerja_aksi()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');
		
		// Membuat gambar wajib di isi
		if (empty($_FILES['foto']['name'])) {
			$this->form_validation->set_rules('foto', 'Foto', 'trim|required');
		}

		if ($this->form_validation->run() == TRUE) {

			$config = [
				'upload_path' => './gambar/pekerja/',
				'allowed_types' => 'gif|jpg|png|jpeg'
			];

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				
				// Mengambil data tentang gambar
				$gambar = $this->upload->data();
				
				$nama = $this->input->post('nama_lengkap');
				$tempat = $this->input->post('tempat_lahir');
				$tgl = $this->input->post('tgl_lahir');
				$jenis = $this->input->post('jenis_kelamin');
				$jabatan = $this->input->post('jabatan');
				$pt = $this->input->post('pendidikan_terakhir');
				$foto = $gambar['file_name'];
	
				$data = [
					'nama_lengkap' => $nama,
					'tempat_lahir' => $tempat,
					'tgl_lahir' => $tgl,
					'jenis_kelamin' => $jenis,
					'jabatan' => $jabatan,
					'pendidikan_terakhir' => $pt,
					'foto' => $foto
				];
	
				$this->m_data->insert_data($data, 'data_pekerja');
				redirect('dashboard/data_pekerja/?alert=sukses');
			} else {
				$this->form_validation->set_message('foto', $data['gambar_error'] = $this->upload->display_errors());
                redirect('dashboard/data_pekerja_tambah');
			}

		} else {
			$this->data_pekerja_tambah();
		}
			
	}

	public function data_pekerja_edit($id)
	{
		$where = [
			'id' => $id
		];
		
		$data['title'] = 'Edit Data Aparatur';
		$data['data_pekerja'] = $this->m_data->edit_data($where, 'data_pekerja')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_data_pekerja_edit', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function data_pekerja_update()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'trim|required');
			
		if ($this->form_validation->run() != FALSE) {

			$id = $this->input->post('id');
			$nama = $this->input->post('nama_lengkap');
				$tempat = $this->input->post('tempat_lahir');
				$tgl = $this->input->post('tgl_lahir');
				$jenis = $this->input->post('jenis_kelamin');
				$jabatan = $this->input->post('jabatan');
				$pt = $this->input->post('pendidikan_terakhir');
				
			$where = [
				'id' => $id
			];

			$data = [
				'nama_lengkap' => $nama,
					'tempat_lahir' => $tempat,
					'tgl_lahir' => $tgl,
					'jenis_kelamin' => $jenis,
					'jabatan' => $jabatan,
					'pendidikan_terakhir' => $pt
			];

			$this->m_data->update_data($where, $data, 'data_pekerja');

			if (!empty($_FILES['foto']['name'])) {
				$config = [
					'upload_path' => './gambar/pekerja/',
					'allowed_types' => 'gif|jpg|png|jpeg'
				];

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					// mengambil data tentang gambar
					$gambar = $this->upload->data();

					$data = [
						'galeri_foto' => $gambar['file_name']
					];

					$this->m_data->update_data($where, $data, 'data_pekerja');
					redirect('dashboard/data_pekerja');
				} else {
					$this->form_validation->set_message('foto', $data['gambar_error'] = $this->upload->display_errors());
					
					$data['title'] = 'Edit Data Aparatur';
					$data['data_pekerja'] = $this->m_data->edit_data($where, 'data_pekerja')->result();
					$this->load->view('dashboard/v_header', $data);
					$this->load->view('dashboard/v_data_pekerja_edit', $data);
					$this->load->view('dashboard/v_footer');
				}
			} else {
				redirect('dashboard/data_pekerja');
			}
		} else {
			$id = $this->input->post('id');
			$where = [
				'id' => $id
			];
			$data['title'] = 'Edit Data Aparatur';
			$data['data_pekerja'] = $this->m_data->edit_data($where, 'data_pekerja')->result();
			$this->load->view('dashboard/v_header', $data);
			$this->load->view('dashboard/v_data_pekerja_edit', $data);
			$this->load->view('dashboard/v_footer');
		}
		
	}

	public function data_pekerja_hapus($id)
	{
		$where = [
			'id' => $id
		];

		$this->m_data->delete_data($where, 'data_pekerja');
		redirect('dashboard/data_pekerja');
	}
	// Akhir Halaman Data Pegawai

	// Halaman Data Penduduk
	public function data_penduduk()
	{
		$data['title'] = 'Data Penduduk';
		$data['data_penduduk'] = $this->db->query("SELECT * FROM penduduk ORDER BY id DESC")->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_data_penduduk', $data);
		$this->footer();
	}

	public function data_penduduk_tambah()
	{
		$data['title'] = 'Tambah Data Penduduk';
		$data['data_pekerjaan'] = $this->m_data->get_data('data_pekerjaan')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_data_penduduk_tambah', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function data_penduduk_aksi()
	{
        $this->form_validation->set_rules('kk', 'No.Kartu Keluarga', 'required|trim|max_length[16]');
        $this->form_validation->set_rules('nik', 'No.NIK', 'required|trim|max_length[16]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('hub_keluarga', 'Hub-Keluarga', 'required|trim');
        $this->form_validation->set_rules('perkawinan', 'Perkawinan', 'required|trim');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');

        if ($this->form_validation->run() != false) {
            $kk = $this->input->post('kk');
            $nik = $this->input->post('nik');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tgl_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $umur = $this->input->post('umur');
            $agama = $this->input->post('agama');
            $hub_keluarga = $this->input->post('hub_keluarga');
            $perkawinan = $this->input->post('perkawinan');
            $pendidikan = $this->input->post('pendidikan');
            $pekerjaan = $this->input->post('pekerjaan');
            $nama_ibu = $this->input->post('nama_ibu');
            $nama_ayah = $this->input->post('nama_ayah');
            $alamat = $this->input->post('alamat');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');

            $data = [
                'kk' => $kk,
                'nik' => $nik,
                'nama_lengkap' => strtoupper($nama_lengkap),
                'tempat_lahir' => strtoupper($tempat_lahir),
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => strtoupper($jenis_kelamin),
                'umur' => $umur,
                'agama' => strtoupper($agama),
                'hub_keluarga' => strtoupper($hub_keluarga),
                'perkawinan' => strtoupper($perkawinan),
                'pendidikan' => strtoupper($pendidikan),
                'pekerjaan' => strtoupper($pekerjaan),
                'nama_ibu' => strtoupper($nama_ibu),
                'nama_ayah' => strtoupper($nama_ayah),
                'alamat' => strtoupper($alamat),
                'rt' => $rt,
                'rw' => $rw
            ];

            $this->m_data->insert_data($data, 'penduduk');
			redirect(base_url().'dashboard/data_penduduk/?alert=sukses');
        } else {
            $this->data_penduduk_tambah();
        }
    }

	public function data_penduduk_detail($id)
	{
		$where = [
			'id' => $id
		];
		$data['title'] = 'Detail Data Peduduk';
		$data['data_penduduk'] = $this->m_data->edit_data($where, 'penduduk')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_data_penduduk_detail', $data);
		$this->load->view('dashboard/v_footer');
	}
	
	public function data_penduduk_edit($id)
	{
        $where = [
        	'id' => $id
		];
		$data = [
			'data_penduduk' => $this->m_data->edit_data($where, 'penduduk')->result(),
			'data_pekerjaan' => $this->m_data->get_data('data_pekerjaan')->result()
		];
		$data['title'] = 'Edit Data Penduduk';
        $this->load->view('dashboard/v_header', $data);
        $this->load->view('dashboard/v_data_penduduk_edit', $data);
        $this->load->view('dashboard/v_footer');
	}

	public function data_penduduk_update()
	{
		$this->form_validation->set_rules('kk', 'No.Kartu Keluarga', 'required|trim');
        $this->form_validation->set_rules('nik', 'No.NIK', 'required|trim');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('hub_keluarga', 'Hub-Keluarga', 'required|trim');
        $this->form_validation->set_rules('perkawinan', 'Perkawinan', 'required|trim');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('rt', 'RT', 'required|trim');
        $this->form_validation->set_rules('rw', 'RW', 'required|trim');
		
		if ($this->form_validation->run() != false) {
			$id = $this->input->post('id');
			$kk = $this->input->post('kk');
            $nik = $this->input->post('nik');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $umur = $this->input->post('umur');
            $agama = $this->input->post('agama');
            $hub_keluarga = $this->input->post('hub_keluarga');
            $perkawinan = $this->input->post('perkawinan');
            $pendidikan = $this->input->post('pendidikan');
            $pekerjaan = $this->input->post('pekerjaan');
            $nama_ibu = $this->input->post('nama_ibu');
            $nama_ayah = $this->input->post('nama_ayah');
            $alamat = $this->input->post('alamat');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');

			$where = [
				'id' => $id
			];

			$data = [
                'kk' => $kk,
                'nik' => $nik,
                'nama_lengkap' => strtoupper($nama_lengkap),
                'tempat_lahir' => strtoupper($tempat_lahir),
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => strtoupper($jenis_kelamin),
                'umur' => $umur,
                'agama' => strtoupper($agama),
                'hub_keluarga' => strtoupper($hub_keluarga),
                'perkawinan' => strtoupper($perkawinan),
                'pendidikan' => strtoupper($pendidikan),
                'pekerjaan' => strtoupper($pekerjaan),
                'nama_ibu' => strtoupper($nama_ibu),
                'nama_ayah' => strtoupper($nama_ayah),
                'alamat' => strtoupper($alamat),
                'rt' => $rt,
                'rw' => $rw
            ];

			$this->m_data->update_data($where, $data, 'penduduk');
			$where = [
				'id' => $id
			];
			$data['title'] = 'Detail Data Penduduk';
			$data['data_penduduk'] = $this->m_data->edit_data($where, 'penduduk')->result();
			$this->load->view('dashboard/v_header', $data);
			$this->load->view('dashboard/v_data_penduduk_detail', $data);
			$this->load->view('dashboard/v_footer');
		} else {
			$id = $this->input->post('id');

			$where = [
				'id' => $id
			];

			$data['data_penduduk'] = $this->m_data->edit_data($where, 'penduduk')->result();
			$data['data_pekerjaan'] = $this->m_data->get_data('data_pekerjaan')->result();

			$data['title'] = 'Edit Data Penduduk';
			$this->load->view('dashboard/v_header', $data);
			$this->load->view('dashboard/v_data_penduduk_edit', $data);
			$this->load->view('dashboard/v_footer');
		}
		
    }

	public function data_penduduk_hapus($id)
	{
		$where = [
			'id' => $id
		];

		$this->m_data->delete_data($where, 'penduduk');
		redirect('dashboard/data_penduduk');
	}
	// Akhir Halaman Data Penduduk

	// Halaman Pesan
	public function pesan()
	{
		// $this->load->database();
		$jumlah_data = $this->m_data->get_data('kontak')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url('dashboard/pesan');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;

		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] ='<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';

		$from = $this->uri->segment(3);
		if ($from == "") {
			$from = 0;
		}
		$this->pagination->initialize($config);

		$data['title'] = 'Pesan';
		$data['pesan'] = $this->db->query("SELECT * FROM kontak ORDER BY id DESC LIMIT $config[per_page] OFFSET $from")->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pesan', $data);
		$this->load->view('dashboard/v_footer');
	}

	
	public function pesan_detail($id)
	{
		$where = [
			'id' => $id
		];
		
		$data1['title'] = 'Pesan Detail';
		$data1['pesan'] = $this->m_data->edit_data($where, 'kontak')->result();
		$this->load->view('dashboard/v_header', $data1);
		$this->load->view('dashboard/v_pesan_detail', $data1);
		$this->load->view('dashboard/v_footer');

		$data = [
			'status' => 'dibaca'
		];

		$this->m_data->update_data($where, $data, 'kontak');
	}

	public function pesan_hapus($id)
	{
		$where = [
			'id' => $id
		];
		 $this->m_data->delete_data($where, 'kontak');
		 
		 redirect('dashboard/pesan');
	}
	// Akhir Halaman Pesan
	
	// Halaman Pengguna
	public function pengguna()
	{
		$data['title'] = 'Pengguna & Hak Akses';
		$data['pengguna'] = $this->m_data->get_data('pengguna')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pengguna', $data);
		$this->footer();
	}
	// Akhir Halaman Pengguna

	// Halaman Pengguna Tambah
	public function pengguna_tambah()
	{
		$data['title'] = 'Buat Pengguna Baru';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pengguna_tambah');
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Pengguna Tambah

	// Halaman Pengguna Aksi
	public function pengguna_aksi()
	{
		// Wajib isi
		$this->form_validation->set_rules('nama','Nama Pengguna','required');
		$this->form_validation->set_rules('email','Email Pengguna','required|is_unique[pengguna.pengguna_email]');
		$this->form_validation->set_rules('username','Username Pengguna','required|alpha_dash');
		$this->form_validation->set_rules('password','Password Pengguna','required|min_length[5]');
		$this->form_validation->set_rules('level','Level Pengguna','required');
		
		if($this->form_validation->run() != false){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$level = $this->input->post('level');

			$data = [
				'pengguna_nama' => $nama,
				'pengguna_email' => $email,
				'pengguna_username' => $username,
				'pengguna_password' => password_hash($password, PASSWORD_DEFAULT),
				'pengguna_level' => $level,
				'pengguna_status' => 0,
				'pengguna_foto' => 'default.jpg'
			];

			// Siapkan token
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$this->_sendEmail($token, 'verify');
			$this->m_data->insert_data($data,'pengguna');
			$this->m_data->insert_data($user_token, 'user_token');
			redirect(base_url().'dashboard/pengguna/?alert=sukses');
			
		}else{
			$this->pengguna_tambah();
		}	
	}
	// Akhir Halaman Pengguna Aksi

	// Halaman Send Email
	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'websitedesaciuyah@gmail.com',
			'smtp_pass' => 'websitedesa',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('websitedesaciuyah@gmail.com', 'Website Desa');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message('Klik tautan ini untuk memverifikasi akun anda : <a href="' . base_url() . 'dashboard/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Verifikasi</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}
	// Akhir Halaman Send Email
	
	// Halaman Verify
	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('pengguna', ['pengguna_email' => $email])->row_array();
		
		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('pengguna_status', 1);
					$this->db->where('pengguna_email', $email);
					$this->db->update('pengguna');

					$this->db->delete('user_token', ['email' => $email]);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' telah diaktifkan! Silahkan <b>masuk</b></div>');
					redirect('login');
				} else {

					$this->db->delete('pengguna', ['pengguna_email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aktivasi akun <b>gagal</b>! Token <b>kedaluwarsa</b>.</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aktivasi akun <b>gagal</b>! Token <b>salah</b>.</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Aktivasi akun <b>gagal</b>! Email <b>salah</b>.</div>');
			redirect('login');
		}
	}
	// Akhir Halaman verify
	
	// Halaman Pengguna Edit
	public function pengguna_edit($id)
	{
		$where = [
			'pengguna_id' => $id
		];

		$data['title'] = 'Edit Pengguna';
		$data['pengguna'] = $this->m_data->edit_data($where, 'pengguna')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pengguna_edit', $data);
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Pengguna Edit
	
	// Halaman Pengguna Update
	public function pengguna_update()
	{
			// Wajib isi
			$this->form_validation->set_rules('nama','Nama Pengguna','required');
			$this->form_validation->set_rules('email','Email Pengguna','required');
			$this->form_validation->set_rules('username','Username Pengguna','required|alpha_dash');
			$this->form_validation->set_rules('level','Level Pengguna','required');
			$this->form_validation->set_rules('status','Status Pengguna','required');
			
			if($this->form_validation->run() != false){
				$id = $this->input->post('id');
				$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$username = $this->input->post('username');
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$level = $this->input->post('level');
				$status = $this->input->post('status');

				//cek jika form password tidak diisi, maka jangan update kolum password, dan sebaliknya
				if($this->input->post('password') == ""){
					$data = [
					'pengguna_nama' => $nama,
					'pengguna_email' => $email,
					'pengguna_username' => $username,
					'pengguna_level' => $level,
					'pengguna_status' => $status
					];
				}else{
					$data = [
						'pengguna_nama' => $nama,
						'pengguna_email' => $email,
						'pengguna_username' => $username,
						'pengguna_password' => $password,
						'pengguna_level' => $level,
						'pengguna_status' => $status
					];
				}
					$where = [
						'pengguna_id' => $id
					];

					$this->m_data->update_data($where,$data,'pengguna');
					redirect(base_url().'dashboard/pengguna');
			}else{
				$id = $this->input->post('id');
				$where = [
					'pengguna_id' => $id
				];
				$data['title'] = 'Edit Pengguna';
				$data['pengguna'] = $this->m_data->edit_data($where,'pengguna')->result();
				$this->load->view('dashboard/v_header', $data);
				$this->load->view('dashboard/v_pengguna_edit',$data);
				$this->load->view('dashboard/v_footer');
		} 
	}
	// Akhir Halaman Pengguna Update

	// Halaman Pengguna Hapus
	public function pengguna_hapus($id)
	{
		$where = [
			'pengguna_id' => $id
		];

		$data = [
			'pengguna_hapus' => $this->m_data->edit_data($where, 'pengguna')->row(),
			'pengguna_lain' => $this->db->query("SELECT * FROM pengguna WHERE pengguna_id != $id")->result()
		];
		$data['title'] = 'Konfirmasi Hapus Pengguna';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pengguna_hapus', $data);
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Pengguna Hapus

	// Halaman Pengguna Hapus Aksi
	public function pengguna_hapus_aksi()
	{
		$pengguna_hapus = $this->input->post('pengguna_hapus');
		$pengguna_tujuan = $this->input->post('pengguna_tujuan');
		// hapus pengguna
		$where = [
			'pengguna_id' => $pengguna_hapus
		];

		$this->m_data->delete_data($where, 'pengguna');

		// pindahkan semua artikel pengguna yang dihapus ke pengguna yang dipilih
		$w = [
			'artikel_author' => $pengguna_hapus
		];
		$d = [
			'artikel_author' => $pengguna_tujuan
		];

		$this->m_data->update_data($w, $d, 'artikel');
		redirect(base_url().'dashboard/pengguna');
	}
	// Akhir Halaman Pengguna Hapus Aksi

	// Halaman Pengaturan
	public function pengaturan()
	{
		$data['pengaturan'] = $this->m_data->get_data('pengaturan')->result();

		$data['title'] = 'Pengaturan Website';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pengaturan', $data);
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Pengaturan

	// Halaman Pengaturan Update
	public function pengaturan_update()
	{
		$this->form_validation->set_rules('nama', 'Nama Website', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('nama_kepdes', 'Nama Kepala Desa', 'trim|required');
		$this->form_validation->set_rules('sambutan_kepdes', 'Sambutan Kepala Desa', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('slogan_1', 'Slogan 1', 'trim|required');
		$this->form_validation->set_rules('slogan_2', 'Slogan 2', 'trim|required');
		$this->form_validation->set_rules('slogan_3', 'Slogan 3', 'trim|required');
		$this->form_validation->set_rules('teks_pembuka', 'Teks Pembuka', 'trim|required');
		$this->form_validation->set_rules('tentang', 'Tentang', 'trim|required');
		$this->form_validation->set_rules('jml_penduduk', 'Jumlah Penduduk', 'trim|required');
		$this->form_validation->set_rules('jml_penduduk_lk', 'Jumlah Penduduk Laki-laki', 'trim|required');
		$this->form_validation->set_rules('jml_penduduk_pr', 'Jumlah Penduduk Perempuan', 'trim|required');

		
		if ($this->form_validation->run() != FALSE) {

			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$nama_kepdes = $this->input->post('nama_kepdes');
			$sambutan_kepdes = $this->input->post('sambutan_kepdes');
			$telepon = $this->input->post('telepon');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$facebook = $this->input->post('facebook');
			$instagram = $this->input->post('instagram');
			$youtube = $this->input->post('youtube');
			$slogan_1 = $this->input->post('slogan_1');
			$slogan_2 = $this->input->post('slogan_2');
			$slogan_3 = $this->input->post('slogan_3');
			$teks_pembuka = $this->input->post('teks_pembuka');
			$tentang = $this->input->post('tentang');
			$jml_penduduk = $this->input->post('jml_penduduk');
			$jml_penduduk_lk = $this->input->post('jml_penduduk_lk');
			$jml_penduduk_pr = $this->input->post('jml_penduduk_pr');

			$where = [];

			$data = [
				'nama' => $nama,
				'deskripsi' => $deskripsi,
				'nama_kepdes' => $nama_kepdes,
				'sambutan_kepdes' => $sambutan_kepdes,
				'telepon' => $telepon,
				'email' => $email,
				'alamat' => $alamat,
				'facebook' => $facebook,
				'instagram' => $instagram,
				'youtube' => $youtube,
				'slogan_1' => $slogan_1,
				'slogan_2' => $slogan_2,
				'slogan_3' => $slogan_3,
				'teks_pembuka' => $teks_pembuka,
				'tentang' => $tentang,
				'jml_penduduk' => $jml_penduduk,
				'jml_penduduk_lk' => $jml_penduduk_lk,
				'jml_penduduk_pr' => $jml_penduduk_pr
			];

			$this->m_data->update_data($where, $data, 'pengaturan');

			$config['allowed_types']	= 'jpg|png|jpeg|svg';
			
			// Periksa apakah ada gambar logo yang diupload
			if (!empty($_FILES['logo']['name'])) {
				$config['upload_path'] = './gambar/logo/';
				
				$this->load->library('upload', $config, 'uploadLogo');
				$this->uploadLogo->initialize($config);

                $this->uploadLogo->do_upload('logo');
                
                // Mengambil data tentang gambar logo yang diupload
                $gambar = $this->uploadLogo->data();
                
                $logo = $gambar['file_name'];

                $this->db->query("UPDATE pengaturan SET logo='$logo' ");
			}

			if (!empty($_FILES['slider_1']['name'])) {
				$config['upload_path'] = './gambar/bg-image/';
				
				$this->load->library('upload', $config, 'uploadSlider1');
				$this->uploadSlider1->initialize($config);

				$this->uploadSlider1->do_upload('slider_1');

				// Mengambil data tentang gambar logo yang diupload
				$gambar = $this->uploadSlider1->data();

				$slider_1 = $gambar['file_name'];

				$this->db->query("UPDATE pengaturan SET slider_1='$slider_1' ");
			}

			if (!empty($_FILES['slider_2']['name'])) {
				$config['upload_path'] = './gambar/bg-image/';
				
				$this->load->library('upload', $config, 'uploadSlider2');
				$this->uploadSlider2->initialize($config);

				$this->uploadSlider2->do_upload('slider_2');

				// Mengambil data tentang gambar logo yang diupload
				$gambar = $this->uploadSlider2->data();

				$slider_2 = $gambar['file_name'];

				$this->db->query("UPDATE pengaturan SET slider_2='$slider_2' ");
			}

			if (!empty($_FILES['slider_3']['name'])) {
				$config['upload_path'] = './gambar/bg-image/';
				
				$this->load->library('upload', $config, 'uploadSlider3');
				$this->uploadSlider3->initialize($config);

				$this->uploadSlider3->do_upload('slider_3');

				// Mengambil data tentang gambar logo yang diupload
				$gambar = $this->uploadSlider3->data();

				$slider_3 = $gambar['file_name'];

				$this->db->query("UPDATE pengaturan SET slider_3='$slider_3' ");
			}

			if (!empty($_FILES['foto_kepdes']['name'])) {
				$config['upload_path'] = './gambar/kepdes/';
				
				$this->load->library('upload', $config, 'uploadFotoKepdes');
				$this->uploadFotoKepdes->initialize($config);

				$this->uploadFotoKepdes->do_upload('foto_kepdes');

				// Mengambil data tentang gambar logo yang diupload
				$gambar = $this->uploadFotoKepdes->data();

				$foto_kepdes = $gambar['file_name'];

				$this->db->query("UPDATE pengaturan SET foto_kepdes='$foto_kepdes' ");
			}
			
			redirect(base_url() . 'dashboard/pengaturan/?alert=sukses');
		} else {
			$this->pengaturan();
		}
		
	}
	// Akhir Halaman Pengaturan Update

	// Halaman Profil
	public function profil()
	{
		// id pengguna yang sedang login
		$id_pengguna = $this->session->userdata('id');
		
		$where = [
			'pengguna_id' => $id_pengguna
		];
		
		$data['title'] = 'Profil';
		$data['profil'] = $this->m_data->edit_data($where, 'pengguna')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_profil', $data);
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Profil

	// Halaman Profil Update
	public function profil_update()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		
		
		if ($this->form_validation->run() != false) {

			$id = $this->session->userdata('id');

			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$email = $this->input->post('email');

			$where = [
				'pengguna_id' => $id
			];

			$data = [
				'pengguna_nama' => $nama,
				'pengguna_username' => $username,
				'pengguna_email' => $email
			];

			$this->m_data->update_data($where, $data, 'pengguna');
			
			// Periksa apakah ada gambar foto yang diupload
            if (!empty($_FILES['foto']['name'])) {
				$config = [
					'upload_path' => './gambar/profil/',
					'allowed_types' => 'jpg|png|jpeg'
				];
				
				$this->load->library('upload', $config);
				
				if ($this->upload->do_upload('foto')) {
					// Mengambil data tentang gambar foto yang diupload
					$gambar = $this->upload->data();
					
					$foto = $gambar['file_name'];
					$data = ['pengguna_foto' => $foto ];
					
					$this->m_data->update_data($where, $data, 'pengguna');
				}
			}

			redirect(base_url() . 'dashboard/profil/?alert=sukses');

		} else {
            $this->profil();
        }
		
	}
	// Akhir Halaman Profil Update

	// Halaman Ganti Password
	public function ganti_password()
	{
		$data['title'] = 'Ganti Password';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_ganti_password');
		$this->load->view('dashboard/v_footer');
	}
	// Akhir Halaman Ganti Password

	// Halaman Ganti Password Aksi
	public function ganti_password_aksi() 
	{
		
		$this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'trim|required|min_length[5]|matches[konfirmasi_password]');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password ', 'trim|required|min_length[5]|matches[password_baru]');

		// Cek validasi
		if ($this->form_validation->run() != false) {
			
			// Menangkap data dari form
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');

			// Cek kesesuaian password lama dengan id pengguna yang sedang login dan password
			$where = [
				'pengguna_id' => $this->session->userdata('id'),
				'pengguna_password' => password_verify($password_lama, PASSWORD_DEFAULT)
			];
			$cek = $this->m_data->cek_login('pengguna', $where)->num_rows();

			// Cek kesesuaian password lama
			if ($cek > 0) {
				// update data password pengguna
				$w = [
					'pengguna_id' => $this->session->userdata('id')
				];

				$data = [
					'pengguna_password' => password_hash($password_baru, PASSWORD_DEFAULT)
				];
				$this->m_data->update_data($where, $data, 'pengguna');

				// Alihkan halaman ke halaman ganti password
				redirect('dashboard/ganti_password?alert=sukses');
			} else {
				redirect('dashboard/ganti_password?alert=gagal');
			}
		} else {
			$this->ganti_password();
		}
		
	}
	// Akhir Halaman Ganti Password Aksi

	// Halaman Keluar
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}
	// Akhir Halaman Keluar

}