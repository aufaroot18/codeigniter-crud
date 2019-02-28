<?php 

class Login_model extends CI_Model {
	public function login() {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
		);

		$query = $this->db->get_where('admin', $data);
		return $query->num_rows();
	}
}