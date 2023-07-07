<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactModel extends CI_Model
{
    
    public function getContacts()
    {
        $this->load->database();
        // $resultSet = $this->db->query("SELECT * FROM contact_info");
        $resultSet = $this->db->get('contact_info');

        if($resultSet->num_rows() > 0){
            return $resultSet->result();
        } else{
            return FALSE;
        }
    }
}
