<?php

class Kategori_model extends CI_Model{


public function getAksesorisGadgets()
{
	return $this->db->order_by('id','DESC')->get_where('tb_barang',['kategori_brg'=>'Aksesoris Gadgets'])->result_array();
}
public function cariAksesorisGadgets()
{
	$keyword=$this->input->post('kword',true);
		$this->db->like('nama_brg',$keyword);
		
	return $this->db->get_where('tb_barang',['kategori_brg'=>'Aksesoris Gadgets'])->result_array();
}

	
public function getPakaianPria()
{
	return $this->db->order_by('id','DESC')->get_where('tb_barang',['kategori_brg'=>'Pakaian Pria'])->result_array();
}
public function cariPakaianPria()
{
	$keyword=$this->input->post('kword',true);
		$this->db->like('nama_brg',$keyword);
		
	return $this->db->get_where('tb_barang',['kategori_brg'=>'Pakaian Pria'])->result_array();
}

public function getSepatuOlahraga()
{
	return $this->db->order_by('id','DESC')->get_where('tb_barang',['kategori_brg'=>'Sepatu Olahraga'])->result_array();
}
public function cariSepatuOlahraga()
{
	$keyword=$this->input->post('kword',true);
		$this->db->like('nama_brg',$keyword);
		
	return $this->db->get_where('tb_barang',['kategori_brg'=>'Sepatu Olahraga'])->result_array();
}

public function getLaptop()
{
	return $this->db->order_by('id','DESC')->get_where('tb_barang',['kategori_brg'=>'Laptop'])->result_array();
}

public function cariLaptop()
{

$keyword=$this->input->post('kword',true);

$this->db->like('nama_brg',$keyword);

	return $this->db->get_where('tb_barang',['kategori_brg'=>'Laptop'])->result_array();
}

}