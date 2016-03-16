<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Logovanje extends Frontend_Controller {

	public function login() {
		$meil = $this->input->post('E-mail');
		$sifra = md5($this->input->post('Sifra'));
		$this->load->model('korisnici');
		$rezultat = $this->korisnici->logovanje($meil, $sifra);

		if (isset($rezultat)) {
			$sesija = array(
					'uloga' => $rezultat['logovanje'][0]['id_uloga'],
					'nadimak' => $rezultat['logovanje'][0]['nadimak'],
					'korisnik_id' => $rezultat['logovanje'][0]['id_korisnik']
			);
			$this->session->set_userdata($sesija);
			redirect(base_url());
		} else {
			redirect(base_url());
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
