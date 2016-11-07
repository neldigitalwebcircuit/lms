<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('claims');

    }

    /**
     * Create Claims Form
     *
     * @param
     * @return
     */
    public function create()
    {
        $userId               = 1;
        $data['user_details'] = $this->user->details($userId);
        $data['group_id']     = strtoupper(substr(md5(date('Ymdhis') . $userId . rand(100, 999)), 3, 9)) . $userId;
        $this->load->view('template/claims/header');
        $this->load->view('claims/form/create', $data);
        $this->load->view('template/claims/footer');
    }

    /**
     * Save Claims Form to DB
     *
     * @param
     * @return
     */
    public function save($form_claims_group_id = '')
    {
        $user_id = 1;
        $this->load->library('form_validation');
        $request = $this->input->post();
        $errors  = [];
        $config  = [
            [
                'field' => 'date',
                'label' => 'Date',
                'rules' => 'required',
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required|max_length[255]',
            ],
            [
                'field' => 'details',
                'label' => 'Details',
                'rules' => 'required|max_length[255]',
            ],
            [
                'field'  => 'amount',
                'label'  => 'Amount',
                'amount' => 'required|integer',
            ],
        ];
        for ($i = 0; $i < count($request['date']); $i++) {
            $validationData = [
                'date'        => $request['date'][$i],
                'description' => $request['description'][$i],
                'details'     => $request['details'][$i],
                'amount'      => $request['amount'][$i],
            ];
            $this->form_validation->set_rules($config);
            $this->form_validation->set_data($validationData);
            if ($this->form_validation->run() == false) {
                $errors[$i] = validation_errors();
            } else {
                continue;
            }
        }

        if (count($errors) > 0) {
            $response = [
                'status'  => 500,
                'success' => false,
                'message' => $errors,
            ];
        } else {
            // Insert data to database
            $total = 0;
            $data['total'] = $request['total'];
            for ($i = 0; $i < count($request['date']); $i++) {
                $data[] = [
                    'user_id'              => $user_id,
                    'form_claims_group_id' => $form_claims_group_id,
                    'date'                 => date('Y-m-d', strtotime($request['date'][$i])),
                    'description'          => $request['description'][$i],
                    'details'              => $request['details'][$i],
                    'amount'               => str_replace(',', '', $request['amount'][$i]),
                    'status'               => 0,
                    'date_created'         => date('Y-m-d h:i:s'),
                ];
            }
            if (count($data) > 0) {
                echo $this->claims->save($data);
            }
        }
    }
}
