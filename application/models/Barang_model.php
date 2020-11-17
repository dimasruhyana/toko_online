

<?php

class Barang_model extends CI_Model
{

	public function getAllProduk()
	{
		return $this->db->order_by('id', 'DESC')->get('tb_barang')->result_array();
	}


	public function tambahProduk($data, $table)
	{

		$this->db->insert($table, $data);
	}

	public function getProdukById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tb_barang')->row_array();
	}

	public function hapusProduk($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tb_barang');
	}

	public function ubahDataProduk()
	{

		$data = [
			'nama_brg' => $this->input->post('nama_brg', true),
			'keterangan_brg' => $this->input->post('keterangan_brg', true),
			'kategori_brg' => $this->input->post('kategori_brg', true),
			'harga_brg' => $this->input->post('harga_brg', true),
			'stok_brg' => $this->input->post('stok_brg', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_barang', $data);
	}

	public function cariDataProduk_user()
	{
		$kword = $this->input->post('kword', true);
		$this->db->like('nama_brg', $kword);
		$this->db->or_like('kategori_brg', $kword);

		return $this->db->get('tb_barang')->result_array();
	}

	public function tambah_keranjang($id)
	{
		$result = $this->db->where('id', $id)
			->limit(1)
			->get('tb_barang');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}
