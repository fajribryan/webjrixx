<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laundry extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Laundryku";
        $this->load->view('layout/navbar', $data);
        $this->load->view('laundry/index');
    }
}
