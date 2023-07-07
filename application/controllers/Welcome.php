<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->library('form_validation');

		if($this->input->post()){
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('name', 'Fullname', 'required');

		if($this->form_validation->run()){
			// $data['name']=$this->input->post('name',TRUE);
		} else{
			// echo validation_errors();
		}
	}
		$this->load->view('welcome_message');
	}
	public function zzz()
	{
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('role', 'User Type', 'required');

		// if($this->form_validation->run()){
		// 	$data['role']=$this->input->post('role',TRUE);   
		// 	var_dump($data['role']);
		// }
		echo "SSSSSSSSSS";
	}
}
