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
        // $this->form_validation->set_rules('nohp', 'nohp', 'required');
        $this->form_validation->set_rules('Cost', 'Cost', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/navbar', $data);
            $this->load->view('crud/tambah', $data);
        } else {
            $this->Modeltable->tambahDatadata_aset();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Siswa', $data);
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
    public function aset()
    {
        $dataaset =  $this->db->query("SELECT Aset FROM data_aset")->result_array();
    }

    public function sendemail()
    {
        $footer = "</a>, Expired Kurang Dari Dua Bulan </div>";
        $today = date('Y-m-d');
        $reminder =  date('Y-m-d', strtotime('+2 months'));
        $token = base64_encode(random_bytes(4));


        $aset = "SELECT Aset, Expired FROM data_aset ";
        $dataaset = $this->db->query($aset)->result();
        foreach ($dataaset as $value) {
            if ($today < $value->Expired & $value->Expired < $reminder) {
                $expired = $value->Expired;
                $asett = $value->Aset;

                $body = "Aset " . $asett . " Expired Tanggal " . $expired . ", Harap Di Perbarui lagi ";
                // $body = $value->Aset;    
                // $user = "SELECT nama FROM user ";
                // $datauser = $this->db->query($user)->result();

                // foreach ($datauser as $u) {
                //     echo $u->nama;
                // if ($today < $exp & $exp < $reminder) {
                //     echo "<div style='padding:5px' style='width:50px'> <span class='glyphicon glyphicon-info-sign'></span> Aset <a style='color:red'>" . $aset . "</a>, Expired Kurang Dari Dua Bulan </div>";
                // }
                $token = base64_encode(random_bytes(4));
                $config = [
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.gmail.com',
                    'smtp_user' => 'mbryanpratama@gmail.com',
                    'smtp_pass' => 'smhdlavbtqoitxtz',
                    'smtp_port' => 465,
                    'mailtype' => 'hmtl',
                    'charset' => 'utf-8',
                    'newline' => "\r\n"
                ];
                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->from('mbryanpratama@gmail.com', 'WEBJRIX KEREN');
                $this->email->to('rizqanaditama@gmail.com');
                $this->email->subject('Aset Sudah Mau Expired');
                $this->email->message($body);

                $this->email->send();
            }
        }
    }
    public function test()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_aset'] = $this->Modeltable->getAlldata_aset();
        $data['body'] = "<div style='padding:5px' style='width:50px'> <span class='glyphicon glyphicon-info-sign'></span> Aset <a style='color:red'>";
        $data['footer'] = "</a>, Expired Kurang Dari Dua Bulan </div>";

        $this->load->view('layout/navbar', $data);
        $this->load->view('user/test');
    }
}
