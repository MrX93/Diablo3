<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Admin extends Frontend_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('uloga') == 1) {
			// ako  sesija postoji i uloga jednaka 1,tada taj nalog ima pristup kontroleru admin i svim njegovim funkcijama
		} else {
			redirect(base_url());
		}
	}

	public function admin_panel() {
		$this->stranica('admin_panel');
	}

	public function prikazi_tabelu($tabela = NULL, $id = NULL) {
		$this->load->model('admin_model');
		$data['kolone'] = $this->admin_model->dohvati_tabelu($tabela);
		$data['view'] = $tabela;
		$data['id'] = $id;
		//echo json_encode($galerija);
		$this->load->view('tabela', $data);
	}
	public function obrisi_red($tabela = NULL, $id = NULL, $prva_kolona=NULL){
		$this->load->model('admin_model');
		$this->admin_model->obrisi_red($tabela,$id,$prva_kolona);
		$data['kolone'] = $this->admin_model->dohvati_tabelu($tabela);
		$data['view'] = $tabela;
		unset($data['id']);
		$this->load->view('tabela',$data);
		
	}
		public function izmeni_red( $id = NULL){
		$vrednosti=$this->input->post();
		
		$prva_kolona=$vrednosti['prva_kolona'];
		unset($vrednosti['prva_kolona']);
		$tabela=$vrednosti['tabela'];
		unset($vrednosti['tabela']);
		
		$vrednosti['vreme_unosa']=time();
		$vrednosti['korisnik_id']=$this->session->userdata('korisnik_id');
		
		$this->load->model('admin_model');
		$this->admin_model->izmeni_red($tabela,$vrednosti,$prva_kolona,$id);
		
		$data['kolone'] = $this->admin_model->dohvati_tabelu($tabela);
		$data['view'] = $tabela;
		unset($data['id']);
		$this->load->view('tabela',$data);	
	}
	
	public function dodaj_red(){
		$vrednosti=$this->input->post();
		
		$tabela=$vrednosti['tabela'];
		unset($vrednosti['tabela']);
		
		$this->load->model('admin_model');
		$this->admin_model->dodaj_red($tabela,$vrednosti);
		
		$data['kolone'] = $this->admin_model->dohvati_tabelu($tabela);
		$data['view'] = $tabela;
		$this->load->view('tabela',$data);	
	}
	
}
