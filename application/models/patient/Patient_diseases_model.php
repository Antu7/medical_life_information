<?php


class Patient_diseases_model extends CI_Model
{
	public function add_patient_diseases($data)
	{
		$this->db->insert('diseases', $data);
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

	public function get_patient_doctor_info_by_id($diseases_id)
	{
		$this->db->select('*');
		$this->db->from('diseases');
		$this->db->where('diseases_id', $diseases_id);
		$query_result = $this->db->get();
		$result = $query_result->row();

		return $result;

	}

	public function update_diseases_info($data, $patient_id)
	{
		$this->db->where('patient_id', $patient_id);
		$this->db->update('diseases', $data);
	}


}
