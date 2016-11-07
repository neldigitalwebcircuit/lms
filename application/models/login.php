<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model
{

    function __construct()
    {parent::__construct();}

    function auth($username, $password)
    {

        //select * from user join employee_details on user.user_id=employee_details.user_id join role on user.role_id=role.role_id

        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('role', 'role.role_id = user.role_id');
        $this->db->join('employee_details', 'employee_details.user_id = user.user_id');
        $this->db->where('username', $username);
        $this->db->where('password', sha1($password));
        $this->db->where('employee_details.empstat', 'ACTIVE');
        $this->db->limit(1);


        $query = $this->db->get();
        
        if($query->num_rows()==1)
        {return $query->result_array();}  
        else 
        {return false;}
    }
}
