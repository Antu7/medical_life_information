<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_view_controllers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$doctor_email = $this->session->userdata('doctor_email');
		if ($doctor_email == null) {
			redirect('Welcome/doctor_login');
		}
	}

	public function index()
	{
		$data = array();
		$doctor_id = $this->session->userdata('doctor_id');
		$data['Doctor_info'] = $this->Doctor_reg_model->get_doctor_info_by_id($doctor_id);
		$data['admin_main_content'] = $this->load->view('doctor/pages/dash_bord', $data, true);
		$this->load->view('doctor/master', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('doctor_email');
		$session_data = array();
		$session_data['message'] = "<h3 style='color: greenyellow; text-align: center'>You Are Successfully LogOut !</h3>";
		$this->session->set_userdata($session_data);
		redirect('Welcome/doctor_login');
	}

	public function edit_profile()
	{
		$data = array();
		$doctor_id = $this->session->userdata('doctor_id');
		$data['Doctor_info'] = $this->Doctor_reg_model->get_doctor_info_by_id($doctor_id);
		$data['admin_main_content'] = $this->load->view('doctor/pages/edit_profile', $data, true);
		$this->load->view('doctor/master', $data);
	}

	public function patient_search()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('doctor/pages/patient_search', '', true);
		$this->load->view('doctor/master', $data);

	}


	public function view_patient_diseases_overview($patient_id)
	{
		$data = array();
		$data['patient_diseases_info'] = $this->Patient_search_model->get_patient_diseases_info_by_id($patient_id);
		$data['admin_main_content'] = $this->load->view('doctor/pages/view_patient_diseases_overview', $data, true);
		$this->load->view('doctor/master', $data);

	}

	public function patient_doctor_info($diseases_id)
	{
		$data = array();
		$data['doctor_info'] = $this->Patient_diseases_model->get_patient_doctor_info_by_id($diseases_id);
		$data['admin_main_content'] = $this->load->view('doctor/pages/view_doctor_info', $data, true);
		$this->load->view('doctor/master', $data);
	}

	public function patient_prescription_info($diseases_id)
	{
		$data = array();
		$data['prescription_info'] = $this->Patient_diseases_model->get_patient_doctor_info_by_id($diseases_id);
		$data['admin_main_content'] = $this->load->view('doctor/pages/prescription', $data, true);
		$this->load->view('doctor/master', $data);

	}


	public function patient_report_info($diseases_id)
	{
		$data = array();
		$data['prescription_info'] = $this->Patient_diseases_model->get_patient_doctor_info_by_id($diseases_id);
		$data['admin_main_content'] = $this->load->view('doctor/pages/report', $data, true);
		$this->load->view('doctor/master', $data);

	}


}

