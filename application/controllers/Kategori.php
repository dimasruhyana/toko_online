<?php 

class Kategori extends CI_Controller{
	

	public function aksesoris_gadgets()
	{	
		$data['judul']='halaman utama';

		$data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
		$data['aksesoris_gadgets']=$this->Kategori_model->getAksesorisGadgets();
		if($this->input->post('kword')){
			$data['aksesoris_gadgets']=$this->Kategori_model->CariAksesorisGadgets();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('kategories/aksesoris_gadgets',$data);
		$this->load->view('templates/footer');
	}


	public function pakaian_pria()
	{	
		$data['judul']='halaman utama';

		$data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
		$data['pakaian_pria']=$this->Kategori_model->getPakaianPria();
		if($this->input->post('kword')){
			$data['pakaian_pria']=$this->Kategori_model->cariPakaianPria();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('kategories/pakaian_pria',$data);
		$this->load->view('templates/footer');
	}

	public function sepatu_sport()
	{	
		$data['judul']='halaman utama';
		$data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
		$data['sepatu_olahraga']=$this->Kategori_model->getSepatuOlahraga();
		if($this->input->post('kword')){
			$data['sepatu_olahraga']=$this->Kategori_model->cariSepatuOlahraga();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('kategories/sepatu_olahraga',$data);
		$this->load->view('templates/footer');
	}

	public function laptop()
		{	
		$data['judul']='halaman utama';
		$data['user']=$this->db->get_where('tb_user',['email'=>$this->session->userdata('email')])->row_array();
		$data['laptop']=$this->Kategori_model->getLaptop();
		if($this->input->post('kword')){
			$data['laptop']=$this->Kategori_model->cariLaptop();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('kategories/laptop',$data);
		$this->load->view('templates/footer');
	}
}