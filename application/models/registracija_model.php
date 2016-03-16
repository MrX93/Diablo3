<?php

class Registracija_model extends CI_Model {

	public function registruj($data) {
		$this->db->insert('korisnici', $data);
	}

}
