<?php 

class Student_model extends CI_Model {
	public function get_data_students() {
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}
}