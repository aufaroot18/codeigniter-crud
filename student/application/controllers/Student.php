<?php 

class Student extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Student_model');
	}

	public function index() {
		$data['judul'] = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->Student_model->get_data_students();
		$this->load->view('admin/header', $data);
		$this->load->view('student/index', $data);
		$this->load->view('admin/footer');
	}
}