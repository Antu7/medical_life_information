<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Patient_diseases_controllers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$patient_email = $this->session->userdata('patient_email');
		if ($patient_email == null) {
			redirect('Welcome/patient_login');
		}
	}

	public function add_diseases_info()
	{
		$data = array();
		$data['patient_id'] = $this->input->post('patient_id');
		$data['diseases_name'] = $this->input->post('diseases_name');
		$data['diseases_status'] = $this->input->post('diseases_status');
		$data['doctor_info'] = $this->input->post('doctor_info');
		$data['date'] = $this->input->post('date');


		/*Image upload start*/

		$config['upload_path'] = 'image/patient_prescription_picture/';
		$config['allowed_types'] = "*";
		$config['max_size'] = 10000000000000;

		$error = '';
		$fdata = array();

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('patient_prescription', true)) {
			$error = $this->upload->display_errors();
			echo $error;
			die();

		} else {
			$fdata = $this->upload->data();

			$data ['patient_prescription'] = $config['upload_path'] . $fdata['file_name'];

		}

		/*Image upload start*/

		$config['upload_path'] = 'image/patient_prescription_picture/';
		$config['allowed_types'] = "*";
		$config['max_size'] = 10000000000000;

		$error = '';
		$fdata = array();

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('patient_report', true)) {
			$error = $this->upload->display_errors();
			echo $error;
			die();

		} else {
			$fdata = $this->upload->data();

			$data ['patient_report'] = $config['upload_path'] . $fdata['file_name'];

		}


		$this->Patient_diseases_model->add_patient_diseases($data);

		$session_data = array();
		$session_data['message'] = "<h3 style='color: green; text-align: center'>Diseases Information Successfully Saved !!!</h3>";
		$this->session->set_userdata($session_data);
		redirect('patient/Patient_view_controllers/add_previous_diseases/');

	}

	public function change_diseases_status()
	{
		$data = array();
		$diseases_id = $this->input->post('diseases_id');
		$data['diseases_status'] = $this->input->post('diseases_status', true);


		$this->Patient_diseases_model->update_diseases_info($data, $diseases_id);

		redirect('patient/Patient_view_controllers/view_all_diseases_list');
	}

}
