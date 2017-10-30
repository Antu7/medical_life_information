<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Doctor_reg_controllers extends CI_Controller
{
    public function doctor_registration()
    {
        if (empty($this->input->post('doctor_name')) and empty($this->input->post('doctor_email'))
            and empty($this->input->post('doctor_phone')) and empty($this->input->post('doctor_password'))
            and empty($this->input->post('doctor_confirm_password')) and empty($this->input->post('doctor_gender'))
        ) {
            $session_data['message'] = "<h3 style='color: red; text-align: center'>You Can't Leave Them Empty !!!</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/doctor_registration');

        } elseif ($doctor_password = $this->input->post('doctor_password') != $doctor_confirm_password = $this->input->post('doctor_confirm_password')) {

            $session_data['message'] = "<h3 style='color: red; text-align: center'>Password And Confirm Password Not Match !!!</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/doctor_registration');

        } elseif ($Doctor_email_chk = $this->input->post('doctor_email')) {

            $is_exist = $this->Doctor_reg_model->isEmailExist($Doctor_email_chk);

            if ($is_exist == true) {

                $session_data['message'] = "<h3 style='color: red; text-align: center'>Email Id Already Registered !!!</h3>";
                $this->session->set_userdata($session_data);
                redirect('Welcome/doctor_registration');

            } else {
                $data = array();
                $data['doctor_name'] = filter_var($this->input->post('doctor_name'), FILTER_SANITIZE_STRING);
                $data['doctor_email'] = filter_var($this->input->post('doctor_email'), FILTER_SANITIZE_EMAIL);
                $data['doctor_phone'] = $this->input->post('doctor_phone');
                $data['doctor_gender'] = $this->input->post('doctor_gender');
                $data['doctor_password'] = $this->input->post('doctor_confirm_password');


                $this->Doctor_reg_model->doctor_registration($data);

                $session_data = array();
                $session_data['message'] = "<h3 style='color: green; text-align: center'>Your Account Created Successfully !!!</h3>";
                $this->session->set_userdata($session_data);
                redirect('Welcome/doctor_registration');


            }
        }

    }

}