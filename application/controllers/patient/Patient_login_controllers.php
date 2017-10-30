<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Patient_login_controllers extends CI_Controller
{

    public function login_check()
    {
        if (empty($this->input->post('patient_email')) and empty($this->input->post('patient_password'))) {
            $session_data['message'] = "<h3 style='color: red; text-align: center'>You Can't Leave Them Empty !</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/patient_login');
        } else {
            $patient_email = ($this->input->post('patient_email'));
            $patient_password = ($this->input->post('patient_password'));

            $result = $this->Patient_reg_model->login_check($patient_email, $patient_password);
            $session_data = array();
        }
        if ($result) {
            $session_data['patient_email'] = $result->patient_email;
            $session_data['patient_id'] = $result->patient_id;


            $this->session->set_userdata($session_data);
            redirect('patient/Patient_view_controllers');
        } else {
            $session_data['message'] = "<h3 style='color: red; text-align: center'>Wrong Email Or Password !</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/patient_login');
        }
        redirect('Welcome/patient_login');
    }
}