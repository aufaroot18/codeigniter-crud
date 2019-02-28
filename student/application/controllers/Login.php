<?php 

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index() {
		return $this->load->view('login/index');
	}

	public function login() {
		$hasil = $this->Login_model->login();
		if ($hasil == 0) {
			redirect('login');
		}
		else {
			redirect('admin');
		}
	}
}