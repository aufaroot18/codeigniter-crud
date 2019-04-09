<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('logged_in')) {
			redirect('login');
		}
	}
	public function index() {
		$data['judul'] = 'Halaman Admin';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
}