<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->helper('form');

        $this->form_validation->set_error_delimiters('<div class="error"></div>');
        $this->form_validation->set_rules('fname', 'First Name', 'required|min_length[3]|max_length[15]|alpha');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|min_length[3]|max_length[15]|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Email Required'));
        $this->form_validation->set_rules('phone', 'Mobile', 'numeric|exact_length[10]');

        if ($this->form_validation->run() === TRUE) {
            echo "Success";
        } else {
            echo validation_errors();
            $this->load->view('contact_view');
        }
    }
}
