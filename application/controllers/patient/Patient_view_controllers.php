<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_view_controllers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$patient_email = $this->session->userdata('patient_email');
		if ($patient_email == null) {
			redirect('Welcome/patient_login');
		}
	}

	public function index()
	{
		$data = array();
		$patient_id = $this->session->userdata('patient_id');
		$data['Patient_info'] = $this->Patient_reg_model->get_patient_info_by_id($patient_id);
		$data['admin_main_content'] = $this->load->view('patient/pages/dash_bord', $data, true);
		$this->load->view('patient/master', $data);
	}


	public function edit_profile()
	{
		$patient_id = $this->session->userdata('patient_id');
		$data = array();
		$data['Patient_info'] = $this->Patient_reg_model->get_patient_info_by_id($patient_id);
		$data['admin_main_content'] = $this->load->view('patient/pages/edit_profile', $data, true);
		$this->load->view('patient/master', $data);
	}

	public function add_previous_diseases()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('patient/pages/add_previous_diseases', '', true);
		$this->load->view('patient/master', $data);
	}

	public function add_report()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('patient/pages/add_report', '', true);
		$this->load->view('patient/master', $data);
	}

	public function view_all_diseases_list()
	{
		$data = array();
		$patient_id = $this->session->userdata('patient_id');
		$data['diseases_info'] = $this->Patient_diseases_model->get_patient_diseases_info_by_id($patient_id);
		$data['admin_main_content'] = $this->load->view('patient/pages/view_all_diseases_list', $data, true);
		$this->load->view('patient/master', $data);
	}

	public function medicine_list()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('patient/pages/medicine_list', '', true);
		$this->load->view('patient/master', $data);

	}


	public function view_all_report()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('patient/pages/view_all_report', '', true);
		$this->load->view('patient/master', $data);

	}

	public function view_all_doctor_list()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('patient/pages/view_all_doctor_list', '', true);
		$this->load->view('patient/master', $data);
	}

	public function given_test_list()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('patient/pages/given_test_list', '', true);
		$this->load->view('patient/master', $data);

	}

	public function logout()
	{
		$this->session->unset_userdata('patient_email');
		$session_data = array();
		$session_data['message'] = "<h3 style='color: greenyellow; text-align: center'>You Are Successfully LogOut !</h3>";
		$this->session->set_userdata($session_data);
		redirect('Welcome/patient_login');
	}

	public function patient_doctor_info($diseases_id)
	{
		$data = array();
		$data['doctor_info'] = $this->Patient_diseases_model->get_patient_doctor_info_by_id($diseases_id);
		$data['admin_main_content'] = $this->load->view('patient/pages/view_doctor_info', $data, true);
		$this->load->view('patient/master', $data);

	}

	public function patient_prescription_info($diseases_id)
	{
		$data = array();
		$data['prescription_info'] = $this->Patient_diseases_model->get_patient_doctor_info_by_id($diseases_id);
		$data['admin_main_content'] = $this->load->view('patient/pages/view_prescription_info', $data, true);
		$this->load->view('patient/master', $data);

	}

	public function patient_report_info($diseases_id)
	{
		$data = array();
		$data['prescription_info'] = $this->Patient_diseases_model->get_patient_doctor_info_by_id($diseases_id);
		$data['admin_main_content'] = $this->load->view('patient/pages/view_report_info', $data, true);
		$this->load->view('patient/master', $data);

	}

}
