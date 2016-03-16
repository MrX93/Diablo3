<?php

class Likovi extends CI_Model {

	public function slideshow() {
		$upit = $this->db->get_where('slajd', array('id_lika' => 1));
		return $upit->result_array();
	}

	public function slideshow_lik($id) {
		$upit = $this->db->get_where('slajd', array('id_lika' => $id));
		return $upit->result_array();
	}

	public function slika_video() {
		$upit = $this->db->get_where('likovi', array('id_lika' => 1));
		return $upit->result_array();
	}

	public function slika_video_lik($id) {
		$upit = $this->db->get_where('likovi', array('id_lika' => $id));
		return $upit->result_array();
	}

	public function pocetna_likovi() {
		$upit = $this->db->query("SELECT * FROM likovi where id_lika > 1 AND id_lika < 7 ");
		return $upit->result_array();
	}

}
