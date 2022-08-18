<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltable');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_aset'] = $this->Modeltable->getAlldata_aset();
        if ($this->input->post('cari')) {
            $data['data_aset'] = $this->Modeltable->caridatadata_aset();
        }
        $this->load->view('layout/navbar', $data);
        $this->load->view('main', $data);
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kondisi'] = ['Sehat', 'Sakit'];
        $this->form_validation->set_rules('Aset', 'Aset', 'required');
        $this->form_validation->set_rules('Qty', 'Qty', 'required');
        $this->form_validation->set_rules('Expired', 'Expired', 'required');
        $this->form_validation->set_rules('Supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('Cost', 'Cost', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/navbar', $data);
            $this->load->view('crud/tambah', $data);
        } else {
            $this->Modeltable->tambahDatadata_aset();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Siswa,', $data);
        }
    }
    public function hapus($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Modeltable->hapusdatadata_aset($id);
        $this->session->set_flashdata('flash', ' Dihapus');
        redirect('Siswa', $data);
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_aset'] = $this->Modeltable->getdata_asetbyid($id);
        // $data['kondisi'] = ['Sehat','Sakit'];
        $this->form_validation->set_rules('Aset', 'Aset', 'required');
        $this->form_validation->set_rules('Qty', 'Qty', 'required');
        $this->form_validation->set_rules('Expired', 'Expired', 'required');
        $this->form_validation->set_rules('Supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('Cost', 'Cost', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/navbar', $data);
            $this->load->view('crud/edit', $data);
        } else {
            $this->Modeltable->editdatadata_aset();
            $this->session->set_flashdata('flash', 'Di Edit');
            redirect('Siswa', $data);
        }
    }
}
