<?php
if(!(isset($_SESSION['username'])))


defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_user extends CI_Controller 
{
    function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->library('form_validation');
            $this->load->model('test');
        }

            public function index()
            {
                


                    $this->load->view('template/header');
                    $this->load->view('common/navigationbar');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//Validating Name Field
$this->form_validation->set_rules('employee_id', 'Employee ID', 'required');
$this->form_validation->set_rules('fullname', 'Full Name', 'required');     
$this->form_validation->set_rules('res_addr', 'Address', 'required|min_length[10]|max_length[50]');
$this->form_validation->set_rules('contact_no', 'Contact No', 'required');
$this->form_validation->set_rules('bday', 'Birth Date', 'required');    
// $this->form_validation->set_rules('bday', 'Birth Date', 'required|regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');                     
$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
$this->form_validation->set_rules('post', 'Position', 'required');            
$this->form_validation->set_rules('dept', 'Department', 'required');            
$this->form_validation->set_rules('divi', 'Division', 'required');            
$this->form_validation->set_rules('datehir', 'Date Hired', 'required');       
$this->form_validation->set_rules('bio_no', 'Bio Metrics No', 'required');          
$this->form_validation->set_rules('emgcy_cperson', 'Emergency Contact Person', 'required'); 
// $this->form_validation->set_rules('emgcy_cno', 'Emergency Contact', 'required|regex_match[/^[0-9]{10}$/]');
$this->form_validation->set_rules('emgcy_cno', 'Emergency Contact', 'required');
$this->form_validation->set_rules('immed_sup', 'Immediate Supperior', 'required');       
$this->form_validation->set_rules('role_id', 'Role', 'required');         
$this->form_validation->set_rules('sgl_parent', 'Question', 'required');     
$this->form_validation->set_rules('totVL', 'Total VL', 'required');        
$this->form_validation->set_rules('totSL', 'Total SL', 'required');         
$this->form_validation->set_rules('totSPL', 'Total SPL', 'required');        

                if($this->form_validation->run() == FALSE) 
                {
                    $this->load->view('common/insert_user');
                } 
            else 
                {   


                    $username = $this->session->username;
                    //$username = $_SESSION['username']; 
                  
                    $employee_id   = $_POST['employee_id'];
                    //  $fullname = $this->session->fullname;
                    //Setting values for table columns

                    if($employee_id&&$username)

                {

                    $userData = array(
                    'employee_id'   => $this->input->post('employee_id'),
                    'role_id'       => $this->input->post('role_id'),
                    'fullname'      => $this->input->post('fullname'),
                    'email'         => $this->input->post('email'),
                    'username'      => $this->input->post('username'),
                    'password'      => 'bm12345',
                    'date_created'         => date('Y-m-d h:i:s'),
                    'employment_status'      => 'ACTIVE'
                    );

                    $userLeaveBalance = array(
                    'yearID'        => $employee_id.''.date('Y'),
                    'employee_id'   => $this->input->post('employee_id'),
                    'fullname'      => $this->input->post('fullname'),
                    'sgl_parent'    => $this->input->post('sgl_parent'),
                    'year'          => date('Y'),
                    'VL_begbal'     => $this->input->post('totVL'), 
                    'totVL'         => $this->input->post('totVL'),
                    'totSL'         => $this->input->post('totSL'),
                    'totSPL'        => $this->input->post('totSPL'),
                    'enrol_by'      => $username,
                    'enrol_date'    => date('Y-m-d h:i:s')
                    );

                    $employeeDetails = array(
                    'employee_id'   => $this->input->post('employee_id'),
                    'res_addr'      => $this->input->post('res_addr'),
                    'contact_no'    => $this->input->post('contact_no'),
                    'bday'          => $this->input->post('bday'), 
                    'datehir'       => $this->input->post('datehir'),
                    'dept'          => $this->input->post('dept'),
                    'divi'          => $this->input->post('divi'),
                    'post'          => $this->input->post('post'),          
                    'emgcy_cperson' => $this->input->post('emgcy_cperson'),
                    'emgcy_cno'     => $this->input->post('emgcy_cno'),
                    'bio_no'        => $this->input->post('bio_no'),
                    'empstat'       => 'ACTIVE',
                    'enrol_by'      => $username,
                    'immed_sup'     => $this->input->post('immed_sup'),
                    'date_created'  => date('Y-m-d h:i:s')
                    );


                        $this->test->insert_user($userData,$userLeaveBalance,$employeeDetails);

                        $successmessage['successmessage'] = 'User Successfully';
            
                        $this->load->view('common/insert_user', $successmessage); 


                }else
                {$errormessage['errormessage'] = 'no data created';}

                    
                    $this->load->view('common/insert_user', $errormessage); 

                }//$this->load->view('template/footer');   

            }
}
?>