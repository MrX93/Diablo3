<?php

class Meni extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function linkovi ()
            {
               $upit=  $this->db->query("select * from meni ");
               return $upit->result_array();
            }        
    public function podlinkovi ()
            {
                $upit1 = $this->db->query("select * from podmeni");
                return $upit1->result_array();
            }
}
