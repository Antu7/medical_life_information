<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_profile_controllers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$doctor_email = $this->session->userdata('doctor_email');
		if ($doctor_email == null) {
			redirect('Welcome/doctor_login');
		}
	}

	public function update_patient_profile()
	{
		$data = array();
		$doctor_id = $this->input->post('doctor_id');
		$data['doctor_email'] = $this->input->post('doctor_email', true);
		$data['doctor_phone'] = $this->input->post('doctor_phone', true);
		$data['doctor_nid'] = $this->input->post('doctor_nid', true);
		$data['doctor_birthday'] = $this->input->post('doctor_birthday', true);
		$data['professional_information'] = $this->input->post('professional_information', true);
		$data['doctor_password'] = $this->input->post('doctor_confirm_password', true);
		$data['designation'] = $this->input->post('designation', true);


		/*Image upload start*/

		$config['upload_path'] = 'image/doctor_profile_picture/';
		$config['allowed_types'] = "*";
		$config['max_size'] = 10000000000000;

		$error = '';
		$fdata = array();

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('doctor_image', true)) {
			$error = $this->upload->display_errors();
			echo $error;
			die();

		} else {
			$fdata = $this->upload->data();

			$data ['doctor_image'] = $config['upload_path'] . $fdata['file_name'];

		}
		/*image upload stop*/

		$this->Doctor_reg_model->update_doctor_info($data, $doctor_id);

		$session_data = array();
		$session_data['message'] = "<h3 style='color: green; text-align: center'>Your Information Update Successfully !!</h3>";
		$this->session->set_userdata($session_data);

		redirect('doctor/Doctor_view_controllers/edit_profile');

	}
}

