
<?php

class Dashboard extends CI_Controller
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

			redirect('Auth/index');
		}
	}



	public function detail($id)
	{
		$data['judul'] = 'Detail Produk';
		$data['barang'] = $this->Barang_model->getProdukById($id);
		$data['admin'] = $this->db->get_where('tb_user', ['email' => 'dimsKiww10@gmail.com'])->row_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['notifikasi'] = $this->Invoice_model->tampil_notif();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
	}

	public function chat_user($id)
	{
		$data['judul'] = 'Detail Produk';
		$data['barang'] = $this->Barang_model->getProdukById($id);
		$data['admin'] = $this->db->get_where('tb_user', ['email' => 'dimsKiww10@gmail.com'])->row_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user_admin'] = $this->db->get_where('tb_user', ['email' => 'dimsKiww10@gmail.com'])->row_array();
		$data['notifikasi'] = $this->Invoice_model->tampil_notif();
		$data['message_admin'] = $this->db->order_by('id', 'DESC')->get_where('message_user', ['from_email' => 'dimsKiww10@gmail.com', 'id_barang' => $id, 'to_email' => $this->session->userdata('email')])->result_array();
		$data['message_user'] = $this->db->order_by('id', 'DESC')->get_where(
			'message_user',
			['from_email' => $this->session->userdata('email'), 'id_barang' => $id]
		)->result_array();


		$this->form_validation->set_rules('msg_user', 'pesan', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('chat_user', $data);
		} else {

			$pesan_user = $this->input->post('msg_user');
			date_default_timezone_set('Asia/Jakarta');

			$data = [

				'id_barang' => $id,
				'from_nama' => $this->session->userdata('nama'),
				'from_email' => $this->session->userdata('email'),
				'to_email' => 'dimsKiww10@gmail.com',
				'message' => $pesan_user,
				'tgl_kirim_pesan' => date('Y-m-d H:i:s')
			];
			$this->db->insert('message_user', $data);
			redirect('Dashboard/chat_user/' . $id);
		}
	}





	public function tambah_ke_keranjang($id)
	{
		$barang = $this->Barang_model->tambah_keranjang($id);

		$data = array(
			'id' => $barang->id,
			'qty' => 1,
			'price' => $barang->harga_brg,
			'name' => $barang->nama_brg
		);

		$this->cart->insert($data);
		redirect('welcome');
	}

	public function detail_keranjang()
	{
		$data['judul'] = 'Keranjang Belanja';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['notifikasi'] = $this->Invoice_model->tampil_notif();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}
	public function hapus_keranjang()
	{
		$this->cart->destroy();

		redirect('welcome');
	}

	public function pembayaran()
	{
		$data['judul'] = 'Pembayaran';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['notifikasi'] = $this->Invoice_model->tampil_notif();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesan()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['notifikasi'] = $this->Invoice_model->tampil_notif();


		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]|max_length[30]|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[10]|max_length[100]|trim');
		$this->form_validation->set_rules('telepon', 'No.telepon', 'required|min_length[12]|max_length[14]|numeric|trim');
		$this->form_validation->set_rules('jasa_pengiriman', 'Jasa Pengiriman', 'required|trim');
		$this->form_validation->set_rules('metode_bayar', 'Pilih Metode ', 'required|trim');




		if ($this->form_validation->run() == FALSE) {

			$data['judul'] = 'Pembayaran';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('pembayaran');
			$this->load->view('templates/footer');
		} else {


			$is_processed = $this->Invoice_model->index();
			if ($is_processed) {
				$this->cart->destroy();
				$data['judul'] = 'Pembayaran';
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('proses_pesan');
				$this->load->view('templates/footer');
			} else {
				echo "Maaf, Pesanan Anda Gagal Diproses";
			}
		}
	}
}
