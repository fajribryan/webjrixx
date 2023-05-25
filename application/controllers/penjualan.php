<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltable');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Penjualan";
        $data['table_master'] = $this->Modeltable->getallmasterbarang();
        $this->form_validation->set_rules('no_faktur', 'no_faktur', 'required');
        $this->form_validation->set_rules('nama_konsumen', 'nama_konsumen', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/navbar', $data);
            $this->load->view('master_barang/penjualan',$data);
        } else {
            $this->Modeltable->tambahpenjualan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('master_barang', $data);
        }
    }
    // public function simpanbarang()
    // {
    //     $this->Modeltable->tambahbarang();
    //     $this->session->set_flashdata('flash', 'Ditambahkan');
    //     redirect('master_barang');
    // }
    // public function deletebarang($kode_barang)
    // {
    //     $this->Modeltable->deletebarang($kode_barang);
    //     $this->session->set_flashdata('flash', ' Dihapus');
    //     redirect('master_barang');
    // }
    // public function editbarang($kode_barang)
    // {
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['kode_barang'] = $this->Modeltable->getbarang($kode_barang);
    //     $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required');
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('layout/navbar', $data);
    //         $this->load->view('master_barang/editbarang', $data);
    //     } else {
    //         $this->Modeltable->editbarangaset();
    //         $this->session->set_flashdata('flash', 'Di Edit');
    //         redirect('master_barang', $data);
    //     }
    // }
}