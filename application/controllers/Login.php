<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Masuk';
		$this->load->view('login/v_header', $data);
		$this->load->view('login/v_login');
		$this->load->view('login/v_footer');
	}
	
	public function aksi() 
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required|min_length[5]');

		if ($this->form_validation->run()!=false) {
			// Menangkap data username dan password dari halaman login
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = [
				'pengguna_email' => $email,
				'pengguna_password' => password_verify($email, $password),
				'pengguna_status' => 1
			];

			$this->load->model('m_data');

			// Cek kesesuaian login pada table pengguna
			$cek = $this->m_data->cek_login('pengguna', $where)->num_rows();

			// Cek jika login benar
			if ($cek > 0) {
				// Ambil data pengguna yang melakukan login
				$data = $this->m_data->cek_login('pengguna', $where)->row();

				// Buat session untuk yang berhasil login
				$data_session = [
					'id' => $data->pengguna_id,
					'email' => $data->pengguna_email,
					'level' => $data->pengguna_level,
					'status' => 'telah_login'
				];
				$this->session->set_userdata($data_session);

				// Alihkan halaman ke halaman dashboard pengguna
				redirect(base_url().'dashboard');
			} else {
				redirect(base_url().'login?alert=gagal');
			}
		} else {
			$this->index();
		}
	}

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

		if ($type == 'forgot') {
			$this->email->subject('Hapus Kata Sandi');
			$this->email->message('Klik tautan ini untuk menghapus kata sandi anda : <a href="' . base_url() . 'login/hapus_kata_sandi?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Hapus kata sandi</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function lupa_kata_sandi()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Lupa Kata Sandi';
			$this->load->view('login/v_header', $data);
			$this->load->view('login/v_lupa_kata_sandi');
			$this->load->view('login/v_footer');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('pengguna', ['pengguna_email' => $email, 'pengguna_status' => 1])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Silahkan cek <b>email</b> anda untuk menghapus kata sandi!</div>');
				redirect('login/lupa_kata_sandi');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Email</b> anda belum terdaftar atau belum aktif!</div>');
				redirect('login/lupa_kata_sandi');
			}
		}
	}

	public function hapus_kata_sandi()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('pengguna', ['pengguna_email' => $email])->row_array();
		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->ubah_kata_sandi();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Hapus kata sandi <b>gagal</b>! Token <b>salah</b>.</div>');
				redirect('login/lupa_kata_sandi');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Hapus kata sandi <b>gagal</b>! Email <b>salah</b>.</div>');
			redirect('login/lupa_kata_sandi');
		}
	}

	public function ubah_kata_sandi()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('login');
		}

		$this->form_validation->set_rules('password', 'Masukkan kata sandi baru anda ...', 'trim|required|min_length[5]|matches[password1]');
		$this->form_validation->set_rules('password1', 'Konfirmasi kata sandi baru anda ...', 'trim|required|min_length[5]|matches[password]');
		
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ubah Kata Sandi';
			$this->load->view('login/v_header', $data);
			$this->load->view('login/v_ubah_kata_sandi');
			$this->load->view('login/v_footer');
		} else {
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('pengguna_password', $password);
			$this->db->where('pengguna_email', $email);
			$this->db->update('pengguna');

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Kata sandi</b> telah diperbarui! Silahkan <b>masuk</b></div>');
			redirect('login');
		}
	}
}