<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Claims extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get all Users Claims Form
     *
     * @param
     * @return (array) $claims Claims Form List
     */
    public function all()
    {
        $this->db->join('user', 'user.user_id = form_claims_total.created_by');
        $query = $this->db->get('form_claims_total');
        $claims  = $query->result_array();
        foreach ($claims as $key => $claim) {
            $forms = $this->claimsFormByGroup($claim['form_claims_group_id']);
            if (count($forms) > 0) {
                foreach ($forms as $form) {
                    // If one of the form is not yet CHECKED
                    if ($form['status']==0) {
                        // Tag as Pending
                        $claims[$key]['status'] = 0;
                        break;
                    }
                }
            }
        }
        return $claims;
    }

    public function save($data = [])
    {
        $form_claims_batch_id = strtoupper(substr(md5(date('mY')), 0, 5));
        // Check if form claims batch exists
        $form_claims_batch = $this->getFormClaimsBatch($form_claims_batch_id);
        if (count($form_claims_batch) == 0) {
            // Insert new form claims batch
            $form_claims_batch_data = [
                'form_claims_batch' => $form_claims_batch_id,
                'payment_status'    => 0,
                'status'            => 0,
                'updated_by'        => 0,
                'posted_by'         => 0,
                'date_created'      => date('Y-m-d h:i:s'),
            ];
            $save = $this->saveFormClaimsBatch($form_claims_batch_data);
        }

        if (count($data) > 0) {
            $total = $data['total'];
            unset($data['total']);
            $insertClaims = $this->db->insert_batch('form_claims', $data);
            if ($insertClaims) {
                // Save data to Claims total
                $totalData = [
                    'form_claims_total_type_id' => 1,
                    'form_claims_group_id'      => $data[0]['form_claims_group_id'],
                    'amount_total'              => $total,
                    'created_by'                => $data[0]['user_id'],
                ];
                $insertTotal = $this->db->insert('form_claims_total', $totalData);
            }
            return $insertTotal;
        }
    }

    /**
     * Save Sum Total of Form Claims Group
     *
     * @param (array) $data Form Claims Data
     * @return (bool) $query Successfully saved
     */
    public function saveTotal($data = [])
    {
        $query = $this->db->insert('form_claims_total', $data);
        return $query;
    }

    /**
     * Get Claims form by Batch
     *
     * @param (string) $form_claims_batch_id Claims Batch ID
     * @return (array) $data List of forms in the batch
     */
    public function getFormClaimsBatch($form_claims_batch_id = '')
    {
        $data              = [];
        $query             = $this->db->where('form_claims_batch', $form_claims_batch_id)->get('form_claims_batch');
        $form_claims_batch = $query->result_array();
        if (count($form_claims_batch) > 0) {
            $data = $form_claims_batch;
        }

        return $data;
    }

    /**
     * Create a Claims Batch
     *
     * @param (array) $data Batch details
     * @return (bool) Insert Batch details result
     */
    public function saveFormClaimsBatch($data = [])
    {
        return $this->db->insert('form_claims_batch', $data);
    }

    /**
     * Fetch Claims for by group
     *
     * @param (string) $claims_group_id Claims group ID
     * @return (array) $data Claims Form List
     */
    public function claimsFormByGroup($claims_group_id = '') 
    {
        $query = $this->db->where('form_claims_group_id', $claims_group_id)->get('form_claims');
        return $query->result_array();
    }
}
