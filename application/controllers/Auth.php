<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	public function index()
	{

		if ($this->session->userdata('email')) {
			redirect('welcome');
		}

		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim',
			[
				'required' => 'Field Email harus diisi'
			]
		);

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim',
			[
				'required' => 'Field Password harus diisi'
			]
		);


		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Halaman Login';
			$this->load->view('templates/header', $data);
			$this->load->view('form_login');
			$this->load->view('templates/footer');
		} else {
			$this->_login();
		}
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {

			if ($user['is_active'] == 1) {

				if (password_verify($password, $user['password'])) {

					$data = [
						'nama' => $user['nama'],
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];


					$this->session->set_userdata($data);

					switch ($user['role_id']) {
						case 1:
							redirect('admin/Dashboard_admin');
							break;
						case 2:
							redirect('welcome/index');
							break;
						default:
							break;
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Password <strong>salah</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Akun <strong>belum aktif</strong>, silahkan Aktivasi akun anda!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('auth');
			}
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Email <strong>tidak terdaftar</strong>, silahkan Registrasi!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth');
		}
	}


	public function registrasi()
	{

		if ($this->session->userdata('email')) {
			redirect('welcome');
		}

		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required|trim|min_length[5]|max_length[20]',
			[
				'required' => 'Field Nama harus diisi',
				'min_length' => 'Field Nama diisi minimal 5 karakter',
				'max_length' => 'Field Nama diisi maksimal 20 karakter'

			]
		);

		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[tb_user.email]',
			[
				'required' => 'Field Email harus diisi',
				'valid_email' => 'Email harus valid',
				'is_unique' => 'Email sudah terdaftar'
			]


		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|matches[password2]|min_length[8]',
			[
				'required' => 'Field Password harus diisi',
				'min_length' => 'Field Password diisi minimal 8 karakter',
				'matches' => 'Password tidak sesuai'

			]
		);
		$this->form_validation->set_rules(
			'password2',
			'Password',
			'required|trim|matches[password1]',
			[
				'required' => 'Field Password harus diisi',
				'matches' => 'Password tidak sesuai'
			]
		);

		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = "Halaman Registrasi";
			$this->load->view('templates/header', $data);
			$this->load->view('form_registrasi');
			$this->load->view('templates/footer');
		} else {

			$email = $this->input->post('email', true);
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'gambar' => 'default.png',
				'no_telepon' => '+62',
				'alamat' => 'aaaaaaaaaa',
				'tgl_buat' => time()
			];

			$token = base64_encode(random_bytes(32));

			$user_token = [
				'email' => $email,
				'token' => $token,
				'tgl_created' => time()
			];

			$this->db->insert('tb_user', $data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			 <strong>BERHASIL</strong> registrasi, Silahkan cek Email anda untuk mengaktivasi akun anda!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth');
		}
	}

	private function _sendEmail($token, $type)
	{

		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'dimsKiww10@gmail.com',
			'smtp_pass' => 'kepodeh_10',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('dimsKiww10@gmail.com', 'Dims Store');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('User Activation');
			$this->email->message('Klik link ini untuk mengaktivasi akun anda : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a> ');
		} else if ($type == 'forget') {
			$this->email->subject('Reset Password');
			$this->email->message('Klik link ini untuk mereset Password anda : <a href="' . base_url() . 'auth/reset?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a> ');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {

				if (time() - $user_token['tgl_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('tb_user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  User Activation <strong>Berhasil,</strong> Silahkan Login! 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
					redirect('auth/index');
				} else {
					$this->db->delete('tb_user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  User Activation <strong>gagal</strong>, Token expired!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
					redirect('auth/index');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  User Activation <strong>gagal,</strong> token salah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('auth/index');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  User Activation <strong>gagal,</strong> email salah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/index');
		}
	}

	public function lupa_password()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email',
			[
				'valid_email' => 'Email tidak valid'
			]
		);
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = "Halaman Lupa password";
			$this->load->view('templates/header', $data);
			$this->load->view('form_lupa_password');
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email', true);
			$user = $this->db->get_where('tb_user', ['email' => $email, 'is_active' => 1])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'tgl_created' => time()
				];

				$this->db->insert('user_token', $user_token);

				$this->_sendEmail($token, 'forget');

				$this->session->set_flashdata('pemberitahuan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Silahkan cek <strong>Email </strong>anda untuk mereset Password
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('auth/lupa_password');
			} else {
				$this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Email tidak <strong>Terdaftar</strong> atau belum <strong>Aktivasi</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('auth/lupa_password');
			}
		}
	}

	public function reset()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {

				if (time() - $user_token['tgl_created'] < (60 * 60 * 24)) {


					$this->session->set_userdata('reset_email', $email);
					$this->changePassword();
				} else {
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Reset Password <strong>gagal</strong>, Token expired!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
					redirect('auth/index');
				}
			} else {

				$this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Reset Password <strong>gagal,</strong> token salah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('auth/lupa_password');
			}
		} else {
			$this->session->set_flashdata('pemberitahuan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Reset Password <strong>gagal,</strong> email salah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/lupa_password');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('auth/index');
		}
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[8]|max_length[30]|matches[password2]',
			[
				'min_length' => 'Password minimal 8 karakter',
				'max_length' => 'Password maksimal 30 karakter',
				'matches' => 'Password tidak sesuai'
			]
		);

		$this->form_validation->set_rules(
			'password2',
			'Password',
			'required|trim|matches[password1]',
			[
				'matches' => 'Password tidak sesuai'
			]
		);
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = "Halaman change password";
			$this->load->view('templates/header', $data);
			$this->load->view('reset_password');
			$this->load->view('templates/footer');
		} else {
			$password = password_hash($this->input->post('password1', true), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('tb_user');

			$this->session->unset_userdata('reset_email');

			$this->db->delete('user_token', ['email' => $email]);



			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			 Reset Password <strong>Berhasil,</strong> Silahkan Login! 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Anda <strong>BERHASIL</strong> Logout
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('auth/index');
	}
}
