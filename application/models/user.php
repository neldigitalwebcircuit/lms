<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    private $SYSTEMS = [
        'claims'    => 2,
        'leave'     => 1,
        'itinerary' => 3
    ];
    /**
     * Get all User list
     * @param
     * @return (array) $query Users List
     */
    public function all($system_name = "")
    {
        // Check System
        if(!isset($this->SYSTEMS[$system_name]))
        {
            return [];
        }
        // Get All Users
        $query = $this->db->join('employee_details', 'employee_details.user_id = user.user_id')
            ->join('role', 'role.role_id = user.role_id')
            ->where('role.role_id <>', 5) // Exempt all Administrator account
            ->get('user');
        $users = $query->result_array();
        if ($system_name != "") {
            if (count($users) > 0) {
                foreach ($users as $key => $user) {
                    if ($user['system_id'] != 0 && $user['system_id'] != 2) {
                        $systems = explode(',', $user['system_id']);
                        if (!in_array($this->SYSTEMS[$system_name], $systems)) {
                            // Remove users without claims access
                            unset($users[$key]);
                        }
                    }
                }
            }
        }
        return $users;
    }

    public function details($userId=0)
    {
        $details = [];
        $query = $this->db->join('employee_details', 'employee_details.user_id = user.user_id')
            ->join('role', 'role.role_id = user.role_id')
            ->where('user.user_id',$userId)
            ->get('user');
        $users = $query->result_array();
        if(count($users) > 0)
        {
            $details = $users[0]; 
        }
        return $details;
    }

}
