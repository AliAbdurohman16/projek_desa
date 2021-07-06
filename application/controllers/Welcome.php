<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('m_data');
        $this->load->model('m_arsip');
        $this->load->helper('text');
    }
    
    public function index()
    {
        $data = [
            // Hitung jumlah penduduk
            'jumlah_penduduk' => $this->m_data->get_data('penduduk')->num_rows(),
            // Laki-laki
            'jumlah_laki_laki' => $this->db->get_where('penduduk', ['jenis_kelamin' => 'LAKI-LAKI'])->num_rows(),
            // Perempuan
            'jumlah_perempuan' => $this->db->get_where('penduduk', ['jenis_kelamin' => 'PEREMPUAN'])->num_rows()
        ];
        
        // 3 artikel terbaru
        $data['artikel'] = $this->db->query("SELECT * FROM artikel, pengguna, kategori WHERE artikel_status = 'publish' AND artikel_author = pengguna_id AND artikel_kategori = kategori_id ORDER BY artikel_id DESC LIMIT 3")->result();

        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();
        $data['h'] = $this->m_data->get_data('halaman')->result();

        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;

        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_homepage', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function single($slug)
    {
        // 3 artikel terbaru
        $data['artikel'] = $this->db->query("SELECT * FROM artikel, pengguna, kategori WHERE artikel_status = 'publish' AND artikel_author = pengguna_id AND artikel_kategori = kategori_id AND artikel_slug='$slug'")->result();

        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

        // SEO META
        if (count($data['artikel']) > 0) {
            $data['meta_keyword'] = $data['artikel'][0]->artikel_judul;
            $data['meta_description'] = substr($data['artikel'][0]->artikel_konten, 0, 10);
        } else {
            $data['meta_keyword'] = $data['pengaturan']->nama;
            $data['meta_description'] = $data['pengaturan']->deskripsi;
        }

        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_single', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function berita()
    {
        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;

        // $this->load->database();
        $jumlah_data = $this->m_data->get_data('artikel')->num_rows();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'berita/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 3;

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

        $from = $this->uri->segment(2);
        if ($from == "") {
            $from = 0;
        }
        $this->pagination->initialize($config);

        $data['artikel'] = $this->db->query("SELECT * FROM artikel, pengguna, kategori WHERE artikel_status = 'publish' AND artikel_author = pengguna_id AND artikel_kategori = kategori_id ORDER BY artikel_id DESC LIMIT $config[per_page] OFFSET $from")->result();
        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_blog', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function page($slug)
    {
        $where = [
            'halaman_slug' => $slug
        ];

        $data['halaman'] = $this->m_data->edit_data($where, 'halaman')->result();

        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;

        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_page', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function kategori($slug)
    {
        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

        // $this->load->database();
        $jumlah_artikel = $this->db->query("SELECT * FROM artikel,pengguna,kategori WHERE
		artikel_status='publish' AND artikel_author=pengguna_id AND artikel_kategori=kategori_id AND
		kategori_slug='$slug'")->num_rows();
        
        $this->load->library('pagination');
        $config['base_url'] = base_url().'kategori/' . $slug;
        $config['total_rows'] = $jumlah_artikel;
        $config['per_page'] = 3;

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

        $data['artikel'] = $this->db->query("SELECT * FROM artikel, pengguna, kategori 
		WHERE artikel_status = 'publish' AND artikel_author = pengguna_id AND artikel_kategori = kategori_id AND 
		kategori_slug = '$slug' ORDER BY artikel_id DESC LIMIT $config[per_page] OFFSET $from")->result();
        
        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;

        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_kategori', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function search()
    {
        // mengambil nilai keyword dari form pencarian
        $cari = htmlentities((trim($this->input->post('cari', true)))? trim($this->input->post('cari', true)): '');

        // jika segmen 2 ada, maka nilai variabel $search akan diganti dengan nilai uri segmen 2
        $cari = ($this->uri->segment(2))? $this->uri->segment(2):$cari;

        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;

        // $this->load->database();
        $jumlah_artikel = $this->db->query("SELECT * FROM artikel,pengguna,kategori WHERE
		artikel_status='publish' AND artikel_author=pengguna_id AND artikel_kategori=kategori_id AND
		(artikel_judul LIKE '%$cari%' OR artikel_konten LIKE '%$cari%')")->num_rows();

        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'search/' . $cari;
        $config['total_rows'] = $jumlah_artikel;
        $config['per_page'] = 3;

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

        $data['artikel'] = $this->db->query("SELECT * FROM artikel, pengguna, kategori 
		WHERE artikel_status = 'publish' AND artikel_author = pengguna_id AND artikel_kategori = kategori_id AND 
		(artikel_judul LIKE '%$cari%' OR artikel_konten LIKE '%$cari%') ORDER BY artikel_id DESC LIMIT $config[per_page] OFFSET $from")->result();

        $data['cari'] = $cari;
        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_search', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function notfound()
    {
        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();
        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;
        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_notfound', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function kontak()
    {
        // data pengaturan website
        $data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();
        $data['kontak'] = $this->m_data->get_data('kontak')->result();

        // SEO META
        $data['meta_keyword'] = $data['pengaturan']->nama;
        $data['meta_description'] = $data['pengaturan']->deskripsi;

        $this->load->view('frontend/v_header', $data);
        $this->load->view('frontend/v_kontak', $data);
        $this->load->view('frontend/v_footer', $data);
    }

    public function pesan_aksi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('subjek', 'Subjek', 'trim|required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
        
        
        if ($this->form_validation->run() != false) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $subjek = $this->input->post('subjek');
            $pesan = $this->input->post('pesan');
            $tanggal = date('Y-m-d H:i:s');

            $data = [
                'nama' => $nama,
                'email' => $email,
                'subjek' => $subjek,
                'pesan' => $pesan,
                'tanggal' => $tanggal
            ];

            $this->m_data->insert_data($data, 'kontak');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Pesan anda telah terkirim!</div>');
            redirect('kontak');
        } else {
            $this->kontak();
        }
    }

	public function aparaturDesa()
	{
		// data pengaturan website
		$data['pengaturan'] = $this->m_data->get_data('pengaturan')->row();

		// SEO META
		$data['meta_keyword'] = $data['pengaturan']->nama;
		$data['meta_description'] = $data['pengaturan']->deskripsi;

		// $this->load->database();
		$jumlah_data = $this->m_data->get_data('data_pekerja')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url('aparatur-desa/');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 6;

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

		$from = $this->uri->segment(2);
		if ($from == "") {
			$from = 0;
		}
		$this->pagination->initialize($config);

		$data['aparatur'] = $this->db->query("SELECT * FROM data_pekerja LIMIT $config[per_page] OFFSET $from")->result();
		
		$this->load->view('frontend/v_header', $data);
		$this->load->view('frontend/v_aparatur', $data);
		$this->load->view('frontend/v_footer', $data);
	}
	
}