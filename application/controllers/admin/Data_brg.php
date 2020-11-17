<?php

class Data_brg extends CI_Controller
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
		$data['barang'] = $this->Barang_model->getAllProduk();
		if ($this->input->post('keyword')) {
			$data['barang'] = $this->Barang_model->cariDataProduk();
		}

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('hal_admin/data_brg', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah()
	{

		$nama_brg = $this->input->post('nama_brg');
		$keterangan_brg = $this->input->post('keterangan_brg');
		$kategori_brg = $this->input->post('kategori_brg');
		$harga_brg = $this->input->post('harga_brg');
		$stok_brg = $this->input->post('stok_brg');
		$gambar_brg = $FILES['gambar_brg']['name'];

		if ($gambar_brg = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar_brg')) {
				echo "Gambar gagal diupload!";
			} else {
				$gambar_brg = $this->upload->data('file_name');
			}
		}



		$data = [
			'nama_brg' => $nama_brg,
			'keterangan_brg' => $keterangan_brg,
			'kategori_brg' => $kategori_brg,
			'harga_brg' => $harga_brg,
			'stok_brg' => $stok_brg,
			'gambar_brg' => $gambar_brg
		];


		$this->Barang_model->tambahProduk($data, 'tb_barang');
		$this->session->set_flashdata('flasher', 'di tambah');
		redirect('admin/Data_brg/index');
	}

	public function hapus($id)
	{
		$data['barang'] = $this->Barang_model->hapusProduk($id);
		$this->session->set_flashdata('flasher', 'di hapus');
		redirect('admin/Data_brg');
	}



	public function ubah($id)
	{

		$data['judul'] = 'Ubah Data Mahasiswa';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = ['Pakaian Pria', 'Pakaian Wanita', 'Pakaian Anak-anak', 'Tv', 'Kulkas', 'Mesin Cuci', 'Handphone', 'Laptop', 'Aksesoris Gadgets', 'Bola', 'Pakaian Olahraga', 'Sepatu Olahraga'];
		$data['barang'] = $this->Barang_model->getProdukById($id);

		$this->form_validation->set_rules('nama_brg', 'Nama Produk', 'required');
		$this->form_validation->set_rules('keterangan_brg', 'Keterangan Produk', 'required');
		$this->form_validation->set_rules('kategori_brg', 'kategori Produk', 'required');
		$this->form_validation->set_rules('harga_brg', 'Harga Produk', 'required|numeric');
		$this->form_validation->set_rules('stok_brg', 'Stok Produk', 'required|numeric');


		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('hal_admin/ubah', $data);
			$this->load->view('templates_admin/footer');
		} else {
			$data['barang'] = $this->Barang_model->ubahDataProduk();
			$this->session->set_flashdata('flasher', 'di ubah');
			redirect('admin/Data_brg/index');
		}
	}
}
