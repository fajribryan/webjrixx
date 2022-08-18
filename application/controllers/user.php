<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltable');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Landing Page";
        $data['kondisisehat'] = $this->Modeltable->kondisisehat();
        $data['kondisisakit'] = $this->Modeltable->kondisisakit();
        $data['kotaasal'] = $this->Modeltable->kotasal();
        $data['mahasiswa'] = $this->Modeltable->mahasiswa();
        $this->load->view('layout/navbar', $data);
        $this->load->view('user/index');
    }
    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "My Profile";
        $this->load->view('layout/navbar', $data);
        $this->load->view('user/profile');
    }
    public function editprofile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Modeltable->editprofile($data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('user/editprofile');
    }
    public function editpassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->Modeltable->editprofile($data);
        $this->form_validation->set_rules('currentpassword', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('newpassword1', 'New Password', 'required|trim|matches[newpassword2]');
        $this->form_validation->set_rules('newpassword2', 'Confirm Password', 'required|trim|matches[newpassword1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/navbar', $data);
            $this->load->view('user/password');
        } else {
            $currentpassword = $this->input->post('currentpassword');
            $newpassword = $this->input->post('newpassword1');
            if (!password_verify($currentpassword, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Salah </div>');
                redirect('user/editpassword');
            } else {
                if ($currentpassword == $newpassword) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password tidak boleh sama</div>');
                    redirect('user/editpassword');
                } else {
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    redirect('user');
                }
            }
        }
    }
}
