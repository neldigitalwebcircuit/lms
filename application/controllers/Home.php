<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{


	public function index()
	{
		$this->load->view('template/header');

		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['user_id'] = $session_data['user_id'];
			$data['fullname'] = $session_data['fullname'];
			$data['username'] = $session_data['username'];

			$this->load->view('common/navigationbar', $data);
			$this->load->view('common/home_contents');
		}
		else
		{
		redirect('Auth', 'refresh');
		}

		//$this->load->view('template/footer');
	}


public function logout()
{

	$this->session->unset_userdata('logged_in');
	$this->session->sess_destroy();
	redirect(site_url('Auth'), 'refresh');

}

}
