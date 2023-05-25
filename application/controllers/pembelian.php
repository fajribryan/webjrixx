<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembelian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltable');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Restok Barang";
        $data['table_master'] = $this->Modeltable->getallmasterbarang();
        $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/navbar', $data);
            $this->load->view('master_barang/restok',$data);
        } else {
            $this->Modeltable->restok();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('master_barang', $data);
        }
    }
}