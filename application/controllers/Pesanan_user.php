<?php

class Pesanan_user extends CI_Controller
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



    public function pesanan()
    {

        $data['judul'] = 'Pesanan User';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->Invoice_model->tampil_pesur();
        if ($this->input->post('keyword')) {
            $data['invoice'] = $this->Invoice_model->cariDataInvoice();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_prof_user');
        $this->load->view('pesanan_user', $data);
        $this->load->view('templates/footer');
    }

    public function detail_pesur($id_invoice)
    {


        $data['judul'] = 'Detail Pesanan';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['invoice'] = $this->Invoice_model->get_id_invoice($id_invoice);
        $data['pesanan'] = $this->Invoice_model->get_id_pesanan($id_invoice);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_prof_user');
        $this->load->view('pesur', $data);
        $this->load->view('templates/footer');
    }
}
