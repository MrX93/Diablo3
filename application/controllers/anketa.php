<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class anketa extends Frontend_Controller {

	public function anketaRezultat() {
		$this->load->model('get_anketa');
		$idGet = $this->get_anketa->getId();
		$this->get_anketa->upisiOdgovor($this->input->post('odgovor'));

		$s = $this->get_anketa->getSuma();
		foreach ($s as $ss) {
			$suma = $ss->Suma;
		}
		$rezultati = $this->get_anketa->getRezultat();
		$naziv = "";
		foreach ($idGet as $IDGET) {
			$naziv = $IDGET->Naziv;
		}

		$response = "";
		foreach ($rezultati as $rezultat) {
			$procenat = ceil((100 * $rezultat->Rezultat) / $suma);
			$response.= $rezultat->Odgovor . '<div id="progressbar" style="width:' . $procenat . '%;">' . $rezultat->Rezultat . ' </div><div class="clear"> </div>';
		}
		echo json_encode($response);
	}

}
