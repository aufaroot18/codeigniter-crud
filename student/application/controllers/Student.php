<?php 

class Student extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Student_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['judul'] = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->Student_model->get_data_students();
		$this->load->view('admin/header', $data);
		$this->load->view('student/index', $data);
		$this->load->view('admin/footer');
	}

	public function create() {
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('hp', 'No Hp', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view("admin/header");
			$this->load->view("student/create");
			$this->load->view("admin/footer");
		}
		else {
			$this->Student_model->create_student();
			redirect('student');
		}
	}
}