
<?php

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('email')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			 Anda <strong>Belum </strong>Login!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');

			redirect('auth/index');
		}
	}

	public function profile()
	{
		$data['judul'] = 'My Profile';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_prof_user', $data);
		$this->load->view('profile_user', $data);
		$this->load->view('templates/footer');
	}

	public function ubah_profile()
	{
		$data['judul'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[5]|max_length[20]');
		$this->form_validation->set_rules(
			'no_telepon',
			'No.Telepon',
			'required|trim|min_length[12]|max_length[14]|numeric',
			[
				'min_length' => 'Field No.Telepon diisi minimal 12 angka',
				'max_length' => 'Field No.Telepon diisi minimal 14 angka',
				'numeric' => 'Field No.Telepon harus diisi angka'
			]

		);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[10]|max_length[100]');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar_prof_user', $data);
			$this->load->view('ubah_profile_user', $data);
			$this->load->view('templates/footer');
		} else {
			$nama = $this->input->post('nama', true);
			$no_telepon = $this->input->post('no_telepon', true);
			$alamat = $this->input->post('alamat', true);
			$email = $this->input->post('email', true);
			$upload_image = $_FILES['gambar']['name'];

			if ($upload_image) {
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = '2048';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {

					$old_image = $data['user']['gambar'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'assets/img/ ' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					$this->upload->dispay_errors();
				}
			}

			$this->db->set('nama', $nama);
			$this->db->where('email', $email);
			$this->db->set('no_telepon', $no_telepon);
			$this->db->where('email', $email);
			$this->db->set('alamat', $alamat);
			$this->db->where('email', $email);
			$this->db->update('tb_user');
			$this->session->set_flashdata('flasher', 'diubah');
			redirect('User/profile');
		}
	}

	public function ubah_password()
	{
		$data['judul'] = 'Ubah Password';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('password_lama', 'Password ', 'required|trim');
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

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar_prof_user', $data);
			$this->load->view('ubah_password', $data);
			$this->load->view('templates/footer');
		} else {
			$password_lama = $this->input->post('password_lama', true);
			$password_baru = $this->input->post('password1', true);

			if (!password_verify($password_lama, $data['user']['password'])) {
				$this->session->set_flashdata('psn_slh', 'lama Salah!');
				redirect('user/ubah_password');
			} else {
				if ($password_baru == $password_lama) {
					$this->session->set_flashdata('psn_slh', 'baru tidak boleh sama dengan password yang lama!');
					redirect('user/ubah_password');
				} else {
					$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('tb_user');

					$this->session->set_flashdata('psn_bnr', 'diubah');
					redirect('user/ubah_password');
				}
			}
		}
	}
}
