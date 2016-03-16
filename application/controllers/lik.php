<?php

class Lik extends Frontend_Controller {

	public function vrsta($id) {


		$this->load->model('likovi');
		$this->load->model('galerija');

		$podaci['slideshow_lik'] = $this->likovi->slideshow_lik($id);
		$podaci['slika_video_lik'] = $this->likovi->slika_video_lik($id);
		$podaci['galerija_direktorijum'] = $this->galerija->galerija_direktorijum($id);

		//stranicenje 

		$config['full_tag_open'] = '<nav class="text-center"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_link'] = 'Prva';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Poslednja';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '<i class="fa fa-lg fa-angle-right"></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '<i class="fa fa-lg fa-angle-left"></i>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a class="active">';
		$config['cur_tag_close'] = '</a></li>';

		$config['base_url'] = base_url() . "lik/vrsta/$id";
		$config['uri_segment'] = 4;
		$page = $this->uri->segment(4);
		$config['total_rows'] = $this->galerija->slike_numRows($id);
		$config['per_page'] = 3;

		$this->pagination->initialize($config);

		$podaci['query'] = $this->galerija->get_slike($config['per_page'], $page, $id);
		$podaci['links'] = $this->pagination->create_links();

		//-----------------

		$podaci['base_url'] = base_url();


		$this->stranica('lik', $podaci);
	}

}
