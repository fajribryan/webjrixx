<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Dashboard";
        $this->load->view('layout/navbar', $data);
        $this->load->view('admin/index');
    }
    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "My Profile";
        $this->load->view('layout/navbar', $data);
        $this->load->view('admin/profile');
    }
}
