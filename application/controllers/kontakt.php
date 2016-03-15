<?php

class Kontakt extends Frontend_Controller {

	public function kontaktiraj() {

		$podaci['title'] = "Contact | ";
		$podaci['kontakt_forma'] = array('name' => 'kontakt_forma');
		$podaci['kontakt_ime'] = array('name' => 'kontakt_ime', 'id' => 'kontakt_ime');
		$podaci['kontakt_predmet'] = array('name' => 'kontakt_predmet', 'id' => 'kontakt_predmet');
		$podaci['kontakt_poruka'] = array('name' => 'kontakt_poruka', 'id' => 'kontakt_poruka');
		$podaci['kontakt_posalji'] = array('name' => 'kontakt_posalji', 'id' => 'kontakt_posalji', 'value' => 'Send');
		$podaci['kontakt_reset'] = array('name' => 'kontakt_reset', 'id' => 'reset', 'value' => 'Reset',);

		$this->load->library('email');

		if ($this->input->post('kontakt_posalji')) {
			$meil = $this->input->post('kontakt_ime');
			$tema = $this->input->post('kontakt_predmet');
			$poruka = $this->input->post('kontakt_poruka');

			$reIme = '/^[a-z0-9\_]+$/';

			if (strlen($poruka) < 1 || strlen($tema) < 1 || !preg_match($reIme, $ime)) {
;
			} else {
				$this->email->from($meil);
				$this->email->to('nikola.milicevic.169.12@ict.edu.rs');
				$this->email->subject($tema);
				$this->email->message($poruka);
				$this->email->send();
			}
		}

		$this->stranica('kontakt', $podaci);
	}

}
