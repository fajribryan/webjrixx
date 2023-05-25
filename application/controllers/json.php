<?php
defined('BASEPATH') or exit('No direct script access allowed');

class json extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modeltable');
    }
    public function index()
    {
    $url="https://dev.farizdotid.com/api/daerahindonesia/provinsi";
    $get_url = file_get_contents($url);
    $data = json_decode($get_url);

    $data_array = array(
    'datalist' => $data
    );
    $this->load->view('json/jsonlist',$data_array);
    }
}