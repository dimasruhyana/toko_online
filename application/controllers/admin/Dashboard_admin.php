<?php

class Dashboard_admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesanan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			 Anda <strong>Belum </strong>Login!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('Auth/index');
		}
	}

	public function index()

	{

		$data['judul'] = 'Halaman Admin';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('hal_admin/dashboard_admin');
		$this->load->view('templates_admin/footer');
	}
}
