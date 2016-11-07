<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_list extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        
        //$this->load->library('form_validation');
    }

    public function index()
    {
         $this->load->view('template/header');
        $this->load->view('common/navigationbar');
        $this->load->model('test');

        $data['users'] = $this->test->get_all_users();
        $this->load->view('common/employee_list',$data);


        $this->load->view('template/footer');


    }
}