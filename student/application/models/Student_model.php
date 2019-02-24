<?php 

class Student_model extends CI_Model {
	public function get_data_students() {
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	public function create_student() {
		$data = [
			"nama" => $this->input->post('nama'),
			"jurusan" => $this->input->post('jurusan'),
			"no_hp" => $this->input->post('hp'),
			"email" => $this->input->post('email'),
			"alamat" => $this->input->post('alamat'),
		];

		$this->db->insert('mahasiswa', $data);
	}

	public function get_one_student($id) {
		$this->db->where("id", $id);
		$query = $this->db->get('mahasiswa')->row_array();
		return $query;
	}

	public function update_student() {
		$data = array(
			'nama' => $this->input->post('nama'),
			'jurusan' => $this->input->post('jurusan'),
			'no_hp' => $this->input->post('hp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
		);

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}
}