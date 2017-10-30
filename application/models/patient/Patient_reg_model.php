<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_reg_model extends CI_Model
{
    public function patient_registration($data)
    {
        $this->db->insert('patient', $data);
    }

    public function login_check($patient_email, $patient_password)
    {
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where('patient_email', $patient_email);
        $this->db->where('patient_password', $patient_password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
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

    public function update_patient_info($data, $patient_id)
    {
        $this->db->where('patient_id', $patient_id);
        $this->db->update('patient', $data);
    }

    public function isEmailExist($Patient_email_chk)
    {
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where('patient_email', $Patient_email_chk);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}