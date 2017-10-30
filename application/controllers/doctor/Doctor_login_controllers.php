<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Doctor_login_controllers extends CI_Controller
{
    public function login_check()
    {
        if (empty($this->input->post('doctor_email')) and empty($this->input->post('doctor_password'))) {
            $session_data['message'] = "<h3 style='color: red; text-align: center'>You Can't Leave Them Empty !</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/doctor_login');
        } else {
            $doctor_email = ($this->input->post('doctor_email'));
            $doctor_password = ($this->input->post('doctor_password'));

            $result = $this->Doctor_reg_model->login_check($doctor_email, $doctor_password);
            $session_data = array();
        }
        if ($result) {
            $session_data['doctor_email'] = $result->doctor_email;
            $session_data['doctor_id'] = $result->doctor_id;


            $this->session->set_userdata($session_data);
            redirect('doctor/Doctor_view_controllers');
        } else {
            $session_data['message'] = "<h3 style='color: red; text-align: center'>Wrong Email Or Password !</h3>";
            $this->session->set_userdata($session_data);
            redirect('Welcome/Doctor_login');
        }
        redirect('Welcome/doctor_login');
    }
}