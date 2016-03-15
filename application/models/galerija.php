<?php

class Galerija extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function galerija_direktorijum($id) {
		return $this->db->get_where('likovi', array('id_lika' => $id))->result_array();
	}

	public function get_slike($limit, $page, $id) {
		return $this->db->get_where('galerija', array('id_lika' => $id), $limit, $page)->result_array();
	}

	public function slike_numRows($id) { 
		return count($this->db->get_where('galerija', array('id_lika' => $id))->result());
	}

}
