<?php
defined('BASEPATH') or exit('No direct script access allowed');

class erdcontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltable');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['konteks'] = $this->Modeltable->getkonteks();
        $this->load->view('layout/navbar', $data);
        $this->load->view('erd/konteks', $data);
    }
    public function erd($kode_konteks)
    {
        $data['kontekss'] = $this->Modeltable->getkonteksbyid($kode_konteks);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['konteks'] = $this->Modeltable->getkonteksbyid($kode_konteks);
        // $data['detail'] = $this->Modeltable->data_sasaran($id_konteks);
        $data['inisiatif'] = $this->Modeltable->getinisiatifbyid($kode_konteks);
        $data['inisiatif1'] = $this->Modeltable->getinisiatif($kode_konteks);
        $data['sasaran'] = $this->Modeltable->getsasaranbyid($kode_konteks);
        $data['sasaran1'] = $this->Modeltable->getsasaran($kode_konteks);
        $data['judul'] = 'Konteks Resiko';
        $this->load->view('layout/navbar', $data);
        $this->load->view('erd/erd', $data);
    }

    public function simpankonteks()
    {
        $this->Modeltable->tambahkonteks();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('erdcontroller');
    }
    public function simpansasaran()
    {
        $data = array('kode_konteks' => $this->Modeltable->data_sasaran());

        $this->Modeltable->tambahsasaran();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('erdcontroller', $data);
    }
    public function simpaninisiatif()
    {
        $data = array('kode_konteks' => $this->Modeltable->data_inisiatif());
        $this->Modeltable->tambahinisiatif();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('erdcontroller', $data);
    }
    public function editsasaran()
    {
        $id_sasaran = $this->input->post('id_sasaran');
        $data = [
            'sasaran' => $this->input->post('sasaran'),
            'kode' => $this->input->post('kode')
        ];
        $this->Modeltable->editsasaranbyid($data, $id_sasaran);
        $this->session->set_flashdata('flash', 'Di Edit');
        redirect('erdcontroller');
    }
    public function editsasaranbyid($id_sasaran)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sasaran1'] = $this->Modeltable->getsasaran($id_sasaran);

        $this->load->view('layout/navbar', $data);
        $this->load->view('erd/editsasaran', $data);
    }
    public function editinisiatif()
    {
        $id_inisiatif = $this->input->post('id_inisiatif');
        $data = [
            'inisiatif' => $this->input->post('inisiatif'),
            'kode' => $this->input->post('kode')
        ];
        $this->Modeltable->editinisiatifbyid($data, $id_inisiatif);
        $this->session->set_flashdata('flash', 'Di Edit');
        redirect('erdcontroller');
    }
    public function editinisiatifbyid($id_inisiatif)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['inisiatif1'] = $this->Modeltable->getinisiatif($id_inisiatif);

        $this->load->view('layout/navbar', $data);
        $this->load->view('erd/editinisiatif', $data);
    }
    public function deleteinisiatif($id_inisiatif)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Modeltable->deleteinisiatif($id_inisiatif);
        $this->session->set_flashdata('flash', ' Dihapus');
        redirect('erdcontroller');
    }
    public function deletesasaran($id_sasaran)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Modeltable->deletesasaran($id_sasaran);
        $this->session->set_flashdata('flash', ' Dihapus');
        redirect('erdcontroller');
    }
}
