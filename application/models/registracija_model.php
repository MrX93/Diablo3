<?php

class Registracija_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function registruj ($data)
            {
                $this->db->insert('korisnici',$data);
            }        
  
}
