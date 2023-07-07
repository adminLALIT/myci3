<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('RegisterModel');

    }

    public function index()
    {
        $this->load->helper('form');

        $this->form_validation->set_error_delimiters('<div class="error"></div>');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[15]|alpha', ['required' => 'Username must not be empty!']);

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Email must not be empty!'));

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|regex_match[/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,20}$/]', array('required' => '%s must not be empty.', 'regex_match' => 'The %s field must contain at least one letter, one number, and may include special characters like !@#$%.'));

        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]', array('required' => '%s must not be empty.'));

        if ($this->form_validation->run() === TRUE) {
            $username = $this->input->post('username', TRUE);
            $email = $this->input->post('email', TRUE);
            $password = $this->input->post('password', TRUE);
            
            $data = [
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $status = $this->RegisterModel->saveData($data);


        } else {
            $this->load->view('register_view');
        }
    }
}
