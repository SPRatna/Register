<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('Signup_model');
    }

	public function index() {

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

		//Validating Email Field
		$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

		//Validating Mobile no. Field
		$this->form_validation->set_rules('dpass', 'Password', 'required|min_length[2]|max_length[12]');


		if ($this->form_validation->run() == FALSE) {
		$this->load->view('user/signup');
		} else {
		//Setting values for tabel columns
		$data = array(
		'Name' => $this->input->post('dname'),
		'Email' => $this->input->post('demail'),
		'Password' => $this->input->post('dpass')
		);
		//Transfering data to Model
		$this->Signup_model->form_insert($data);
		$data['message'] = 'Data Inserted Successfully';
		//Loading View
		$this->load->view('user/signup', $data);
		}
		}

}
