<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_search_controllers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$doctor_email = $this->session->userdata('doctor_email');
		if ($doctor_email == null) {
			redirect('Welcome/doctor_login');
		}
	}

	public function patient_email_search()
	{
		if (empty($this->input->post('patient_email_search'))
		) {
			$session_data['message'] = "<h3 style='color: red; text-align: center'>You Can't Leave This Empty !!!</h3>";
			$this->session->set_userdata($session_data);
			redirect('doctor/Doctor_view_controllers/patient_search');

		} else {
			$data = array();
			$patient = filter_var($this->input->post('patient_email_search'), FILTER_SANITIZE_EMAIL);
			$data['Patient_info'] = $this->Patient_search_model->search_patient_email($patient);

			if ($data['Patient_info'] == false){
				$session_data['message'] = "<h3 style='color: red; text-align: center'> Patient Not Found !!!</h3>";
				$this->session->set_userdata($session_data);
				redirect('doctor/Doctor_view_controllers/patient_search');
			}
			else{

				$data['admin_main_content'] = $this->load->view('doctor/pages/patient_information', $data, true);
				$this->load->view('doctor/master', $data);
			}


		}

	}


}
