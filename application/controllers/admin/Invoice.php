<?php

class Invoice extends CI_Controller
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
		$data['invoice'] = $this->Invoice_model->tampil_data();
		if ($this->input->post('keyword')) {
			$data['invoice'] = $this->Invoice_model->cariDataInvoice();
		}

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('hal_admin/invoice', $data);
		$this->load->view('templates_admin/footer');


		$id = $this->input->post('id');

		$invoice = $this->db->get_where('tb_invoice', ['id' => $id])->row_array();

		if (time() - $invoice['tgl_created'] < (60)) {
			return true;
		} else {
			$this->db->delete('tb_invoice', ['id' => $id]);
		}
	}

	public function detail_invoice($id_invoice)
	{
		$data['judul'] = 'Invoice';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['invoice'] = $this->Invoice_model->get_id_invoice($id_invoice);
		$data['pesanan'] = $this->Invoice_model->get_id_pesanan($id_invoice);


		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('hal_admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function hapus_pesanan()
	{
		$id = $this->input->post('id_pesan');

		$pesanan = $this->db->get_where('tb_pesanan', ['id' => $id])->row_array();

		if (time() - $pesanan['tgl_created'] < (60)) {
			return true;
		} else {
			$this->db->delete('tb_pesanan', ['id' => $id]);
			redirect('admin/Invoice/index');
		}
	}
}
