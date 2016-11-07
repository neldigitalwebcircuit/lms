<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function get_all_users()
    {
        $query = $this->db->get('user');

        return $query->result_array();
    }

    public function insert_to_user($data=[])
    {
        $this->db->insert_batch('user',$data);
    }

    public function update_user_details($employee_id="",$data=[])
    {
        $this->db->where('employee_id', $employee_id);
        $this->db->update('leave_balance', $data);
    }

    public function get_emp_details()
    {
        $query = $this->db->get('employee_details');
        return $query->result_array();
    }

    public function update_leave_balance($employee_id=0,$data=[])
    {
        $this->db->where('employee_id', $employee_id);
        $this->db->update('leave_balance', $data);
    }
}