 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_all_users()
    {
        //$query = $this->db->get('user');
        //select * from user join employee_details on user.user_id=employee_details.user_id join role on user.role_id=role.role_id
        
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('role', 'role.role_id = user.role_id');
        $this->db->join('employee_details', 'employee_details.user_id = user.user_id');
        $this->db->where('employment_status', 'ACTIVE');

        $query = $this->db->get();
        return $query->result_array();

    }

        public function insert_user($userData=[],$userLeaveBalance=[],$employeeDetails=[])
    {
        $this->db->insert('user',$userData);
        $this->db->insert('employee_details',$employeeDetails);
        $this->db->insert('leave_balance',$userLeaveBalance);

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