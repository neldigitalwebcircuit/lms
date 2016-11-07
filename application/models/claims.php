<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Claims extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        $this->db->join('user', 'user.user_id = form_claims.user_id');
        $this->db->join('form_claims_total','form_claims_total.form_claims_group_id = form_claims.form_claims_group_id');
        $this->db->group_by('form_claims.form_claims_group_id');
        $query = $this->db->get('form_claims');
        return $query->result_array();
    }

    public function save($data = [])
    {
        if (count($data) > 0) {
            $total = $data['total'];
            unset($data['total']);
            $insertClaims = $this->db->insert_batch('form_claims', $data);
            if ($insertClaims) {
                // Save data to Claims total
                $totalData = [
                    'form_claims_group_id' => $data[0]['form_claims_group_id'],
                    'amount_total'         => $total,
                    'created_by'           => $data[0]['user_id']
                ];
                $insertTotal = $this->db->insert('form_claims_total', $totalData);
            }
            return $this->db->insert_id();
        }
    }

    public function saveTotal($data = [])
    {
        $query = $this->db->insert('form_claims_total', $data);
        return $query;
    }
}
