<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{





    public function index()
    {
        $this->load->view('landing');
    }

    public function doctor_login()
    {
		$doctor_email = $this->session->userdata('doctor_email');
		if ($doctor_email != null) {
			redirect('doctor/Doctor_view_controllers', 'refresh');
		}
        $this->load->view('doctor/login');
    }

    public function doctor_registration()
    {
        $this->load->view('doctor/registration');
    }

    public function patient_login()
    {
		$patient_email = $this->session->userdata('patient_email');
		if ($patient_email != null) {
			redirect('patient/Patient_view_controllers', 'refresh');
		}
        $this->load->view('patient/login');
    }

    public function patient_registration()
    {
        $this->load->view('patient/registration');
    }

    public function patient_dash_bord()
    {
        $this->load->view('patient/master');
    }

    public function doctor_dash_bord()
    {
        $this->load->view('doctor/master');
    }
}
