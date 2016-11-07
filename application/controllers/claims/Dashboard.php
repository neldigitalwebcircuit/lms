<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('claims');
    }
    public function index()
    {
        $data['forms'] = $this->claims->all();
        $this->load->view('template/claims/header');
        $this->load->view('claims/dashboard/index',$data);
        $this->load->view('template/claims/footer');
    }
}
