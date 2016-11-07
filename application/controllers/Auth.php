<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('test');
        $this->load->model('login');
        $this->load->library('form_validation');
        //$this->load->library('session');
    }

    public function index()
    {

        $this->load->view('template/header');

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_basisdata_check');

        if ($this->form_validation->run() == false) {
            $this->load->view('common/auth/loginform');
        } else {
            // redirect(base_url('index.php/home'), 'refresh');
            redirect('home');
        }
        // $data['users'] = $this->test->get_all_users();
        // $this->load->view('common/auth/index',$data);

        //$this->load->view('common/auth/loginform');
        //$this->load->view('common/auth/navigationbar');

        $this->load->view('template/footer');
    }

    public function basisdata_check($password)
    {

        $username = $this->input->post('username');
        $result   = $this->login->auth($username, $password);
        if ($result) {
            $sess_array = array();
            if (count($result) > 0) {
                foreach ($result as $row) {
                    $sess_array = ['user_id' => $row->user_id, 'username' => $row->username, 'fullname' => $row->fullname];
                    $this->session->userdata('user_id');
                    
                    //,'role_id' => $row->role_id, 'role_name' => $row->role_name);
                    //$sessionArray = array('user_id' => $row->user_id, 'username' => $row->username, 'fullname' => $row->fullname);
                    //$sessionArray =     ['user_id' => $row->user_id, 'username' => $row->username, 'fullname' => $row->fullname];
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                return true;
            } else {
                return false;
            }

        } else {
            $this->form_validation->set_message('basisdata_check', 'Invalid Username and Password!');
            return false;
        }
    }
}
