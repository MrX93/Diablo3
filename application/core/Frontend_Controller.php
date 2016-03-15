<?php

class Frontend_Controller extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function stranica($ime_stranice, $podaci = array()) {
		$podaci['base_url'] = base_url();
		$this->load->model('meni');
		$this->load->model('get_anketa');
		$podaci['session'] = $this->session->all_userdata();
		//anketa forma
		$podaci['anketa_pitanje'] = $this->get_anketa->getAnketaPitanje();
		$podaci['anketa_odgovori'] = $this->get_anketa->getAnketaOdgovori();
		$podaci['form_anketa'] = array('name' => 'form_anketa', 'id' => 'form_anketa');
		$podaci['anketaSbt'] = array('name' => 'anketaSbt', 'value' => 'Glasaj', 'id' => 'anketaSbt');
		//--------------------- 
		$podaci['meni'] = $this->meni->linkovi();
		$podaci['podmeni'] = $this->meni->podlinkovi();

		$this->load->view('header', $podaci);
		$this->load->view('meni', $podaci);
		$this->load->view($ime_stranice, $podaci);
		$this->load->view('footer', $podaci);
	}

}
