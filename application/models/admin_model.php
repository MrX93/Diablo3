<?php

class Admin_model extends CI_Model {

	public function dohvati_tabelu($tabela) {
		$this->db->select('*');
		$this->db->select('k.nadimak izmenio');
		$this->db->from('korisnici k');
		$this->db->join($tabela, "k.id_korisnik =$tabela.korisnik_id", 'right');
		$query = $this->db->get();
		return $query->result();
	}

	public function obrisi_red($tabela, $id, $prva_kolona) {
		$this->db->delete($tabela, array($prva_kolona => $id));
	}

	public function dodaj_red($tabela, $vrednosti) {
		$this->db->insert($tabela, $vrednosti);
	}
	
	public function izmeni_red($tabela,$vrednosti,$prva_kolona,$id) {
		$this->db->where($prva_kolona, $id);
		$this->db->update($tabela, $vrednosti); 
	}
	
	public function unesi_red($tabela,$vrednosti) {
		$this->db->insert($tabela, $vrednosti); 
	}
}
