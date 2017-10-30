<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_reg_controllers extends CI_Controller
{
    public function patient_registration()
    {
        if (empty($this->input->post('patient_name')) and empty($this->input->post('patient_email')) and empty($this->input->post('patient_phone'))
            and empty($this->input->post('patient_password')) and empty($this->input->post('patient_confirm_password'))
            and empty($this->input->post('patient_gender'))
        ) {
            $session_data['message'] = "<h3 style='color: red; text-align: center'>You Can't Leave Them Empty !!!</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/patient_registration');

        } elseif ($patient_password = $this->input->post('patient_password') != $patient_confirm_password = $this->input->post('patient_confirm_password')) {

            $session_data['message'] = "<h3 style='color: red; text-align: center'>Password And Confirm Password Not Match !!!</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/patient_registration');

        } elseif ($Patient_email_chk = $this->input->post('patient_email')) {

            $is_exist = $this->Patient_reg_model->isEmailExist($Patient_email_chk);

            if ($is_exist == true) {

                $session_data['message'] = "<h3 style='color: red; text-align: center'>Email Id Already Registered !!!</h3>";
                $this->session->set_userdata($session_data);
                redirect('Welcome/patient_registration');

            } else {
                $data = array();
                $data['patient_name'] = filter_var($this->input->post('patient_name'), FILTER_SANITIZE_STRING);
                $data['patient_email'] = filter_var($this->input->post('patient_email'), FILTER_SANITIZE_EMAIL);
                $data['patient_phone'] = $this->input->post('patient_phone');
                $data['patient_gender'] = $this->input->post('patient_gender');
                $data['patient_password'] = $this->input->post('patient_confirm_password');


                $this->Patient_reg_model->patient_registration($data);

                $session_data = array();
                $session_data['message'] = "<h3 style='color: green; text-align: center'>Your Account Created Successfully !!!</h3>";
                $this->session->set_userdata($session_data);
                redirect('Welcome/patient_registration');


            }
        }

    }
}