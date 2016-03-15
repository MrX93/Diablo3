<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pocetna extends Frontend_Controller {

	public function index() {

		$this->load->model('likovi');

		$podaci['slideshow'] = $this->likovi->slideshow();
		$podaci['slika_video'] = $this->likovi->slika_video();
		$podaci['pocetna_likovi'] = $this->likovi->pocetna_likovi();
		$this->stranica('pocetna', $podaci);
	}
}
