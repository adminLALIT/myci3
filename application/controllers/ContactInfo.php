<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactInfo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }
    
    public function index()
    {
        // $data = array(
        //     'firstname' => 'Mike',
        //     'lastname' => 'Ross',
        //     'email' => 'mike@email.com',
        //     'phone' => 3426678832
        // );

        // $this->db->insert('contact_info', $data);

        // $resultSet = $this->db->query("SELECT * FROM contact_info");
        // echo "<pre>";
        // print_r($resultSet->num_rows());
        // if($result)

        $this->load->model('ContactModel');
        $data['records'] = $this->ContactModel->getContacts();
        
        $this->load->view('contact_info', $data);
    }
}
