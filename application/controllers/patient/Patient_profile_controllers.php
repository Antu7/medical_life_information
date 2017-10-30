<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_profile_controllers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $patient_email = $this->session->userdata('patient_email');
        if ($patient_email == null) {
            redirect('Welcome/patient_login');
        }
    }

    public function update_patient_profile()
    {
        $data = array();
        $patient_id = $this->input->post('patient_id');
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['patient_phone'] = $this->input->post('patient_phone', true);
        $data['patient_nid'] = $this->input->post('patient_nid', true);
        $data['patient_birthday'] = $this->input->post('patient_birthday', true);
        $data['patient_blood_group'] = $this->input->post('patient_blood_group', true);
        $data['patient_password'] = $this->input->post('patient_confirm_password', true);


        /*Image upload start*/

        $config['upload_path'] = 'image/patient_profile_picture/';
        $config['allowed_types'] = "*";
        $config['max_size'] = 10000000000000;

        $error = '';
        $fdata = array();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('patient_image', true)) {
            $error = $this->upload->display_errors();
            echo $error;
            die();

        } else {
            $fdata = $this->upload->data();

            $data ['patient_image'] = $config['upload_path'] . $fdata['file_name'];

        }
        /*image upload stop*/

        $this->Patient_reg_model->update_patient_info($data, $patient_id);

        $session_data = array();
        $session_data['message'] = "<h3 style='color: green; text-align: center'>Your Information Update Successfully !!</h3>";
        $this->session->set_userdata($session_data);

        redirect('patient/Patient_view_controllers/edit_profile');

    }
}