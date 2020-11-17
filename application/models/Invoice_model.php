<?php

class Invoice_model extends CI_Model
{

	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$invoice = [
			'email' => $email,
			'nama' => $nama,
			'alamat' => $alamat,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
			'tgl_created' => time()
		];

		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = [
				'email' => $email,
				'id_invoice' => $id_invoice,
				'id_brg' => $item['id'],
				'nama_brg' => $item['name'],
				'jumlah' => $item['qty'],
				'harga' => $item['price'],
				'tgl_pesan' => time()
			];

			$this->db->insert('tb_pesanan', $data);
		}
		foreach ($this->cart->contents() as $prdk) {
			$data = [
				'email' => $email,
				'nama_produk' => $prdk['name'],
				'tgl_pesan' => time()
			];

			$this->db->insert('notifikasi', $data);
		}
		return TRUE;
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function tampil_pesur()
	{

		$result = $this->db->get_where('tb_invoice', ['email' => $this->session->userdata('email')]);
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function tampil_notif()
	{

		$result = $this->db->get_where('notifikasi', ['email' => $this->session->userdata('email')]);
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function cariDataInvoice()
	{
		$keyword = $this->input->post('keyword', true);

		$this->db->like('nama', $keyword) or
			$this->db->like('alamat', $keyword);


		return $this->db->get('tb_invoice')->result();
	}

	public function get_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');

		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return false;
		}
	}

	public function get_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');

		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}
}
