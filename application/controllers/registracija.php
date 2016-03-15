<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Registracija extends Frontend_Controller {

	public function registruj() {
		$this->load -> model('registracija_model');

		$user = $_POST['nadimak'];
		$meil = $_POST['rE-mail'];
		$sifra = md5($_POST['rsifra']);
		$ponSifra = md5($_POST['rEponoviSifru']);
		$uslov = $_POST['uslov'];
		$reMeil = '/^[\S]+@[a-z]{3,8}\.[a-z]{2,4}(\.[a-z]{2,4})?$/';
		$greske = array();

		

		if ($user == "") {
			$greske[] = "Morate uneti nadimak!!!";
		}

		if (!preg_match($reMeil, $meil)) {
			$greske[] = "Email nije unet u dobrom formatu!!!";
		}

		if ($sifra != $ponSifra) {
			$greske[] = "Sifre se ne poklapaju!!!";
		}
		if ($sifra == "") {
			$greske[] = "Morate unesti sifru!!!";
		}
		if (count($greske) == 0) {
			$data = array(
					'nadimak' => $this->input->post('nadimak'),
					'meil' => $this->input->post('rE-mail'),
					'sifra' => $this->input->post('rsifra'),
					'id_uloga' => '2',
					'vreme'=>time(),
					'korisnik_id'=>$this->session->userdata('korisnik_id')
			);
			$this->registracija_model->registruj($data);
			 redirect (base_url());
		} else {
			foreach ($greske as $g) {
				echo $g . "</br>";
			}
		}
	}

}
