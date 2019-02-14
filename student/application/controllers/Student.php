<?php 

class Student extends CI_Controller {
	public function index() {
		$this->load->view('admin/header');
		$this->load->view('student/index');
		$this->load->view('admin/footer');
	}
}