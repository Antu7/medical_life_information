<?php

class Patient_search_model extends CI_Model
{
	public function search_patient_email($patient)
	{
		$this->db->where('patient_email', $patient);
		$query = $this->db->get('patient');
		return $query->result();
	}

	public function get_patient_info_by_id($patient_id)
	{
		$this->db->select('*');
		$this->db->from('patient');
		$this->db->where('patient_id', $patient_id);
		$query_result = $this->db->get();
		$result = $query_result->row();

		return $result;

	}

	public function get_patient_diseases_info_by_id($patient_id)
	{
		$this->db->select('*');
		$this->db->from('diseases');
		$this->db->where('patient_id', $patient_id);
		$query_result = $this->db->get();
		$result = $query_result->result();

		return $result;

	}
}
