<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('test');
    }
    public function index()
    {
        $data['users'] = $this->test->get_all_users();
        $this->load->view('template/header');
        $this->load->view('common/auth/index',$data);
        $this->load->view('template/footer');
    }
}
