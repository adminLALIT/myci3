<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Model
{
    public function saveData($data) {
       $this->db->insert('users', $data);

       if($this->db->affected_rows === 1){
        return TRUE;
       } else {
        return FALSE;
       }
    }
}
