<?php

class Get_anketa extends CI_Model {

	public function getId() {
		$this->db->select('Naziv, idAnketa');
		$query_id = $this->db->get_where('anketa', array('Aktivna' => 1));
		return $query_id->result();
	}

	public function getRezultat() {
		$this->db->select('Odgovor, Rezultat', 'Rezultat');
		$this->db->from('anketaodgovori');
		$this->db->join('anketa', 'anketaodgovori.idAnketa = anketa.idAnketa');
		$query_rezultat = $this->db->get();
		return $query_rezultat->result();
	}

	public function getSuma() {

		$query_suma = $this->db->query("SELECT SUM(Rezultat) as Suma FROM anketaodgovori");
		return $query_suma->result();
	}

	public function getAnketaPitanje() {

		$query_anketa = $this->db->get_where('anketa', array('Aktivna' => 1));
		return $query_anketa->result_array();
	}

	public function getAnketaOdgovori() {
		$query_odgovori = $this->db->get("anketaodgovori");
		return $query_odgovori->result_array();
	}

	public function upisiOdgovor($odgovor) {
		$this->db->set('Rezultat', 'Rezultat+1', FALSE);
		$this->db->where('idAnketaOdgovori', $odgovor);
		$this->db->update('anketaodgovori');
	}

}
