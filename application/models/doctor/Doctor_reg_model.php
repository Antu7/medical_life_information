<?php

class Doctor_reg_model extends CI_Model
{
    public function doctor_registration($data)
    {
        $this->db->insert('doctor', $data);
    }

    public function login_check($doctor_email, $doctor_password)
    {
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where('doctor_email', $doctor_email);
        $this->db->where('doctor_password', $doctor_password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

	public function get_doctor_info_by_id($doctor_id)
    {
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where('doctor_id', $doctor_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;

    }

    public function update_doctor_info($data, $patient_id)
    {
        $this->db->where('doctor_id', $patient_id);
        $this->db->update('doctor', $data);
    }

    public function isEmailExist($Doctor_email_chk)
    {
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where('doctor_email', $Doctor_email_chk);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
