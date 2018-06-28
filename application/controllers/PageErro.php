<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PageErro extends CI_Controller {

	public function index() {

		@$banners = array(
			'banners' => $this->banners_model->exibeBanner());

		$this->load->view("english/top");
		$this->load->view("english/buscaDealers");
		$this->load->view("english/search");
		$this->load->view("english/banner-sponsored-google");
		$this->load->view("english/erro404/body-erro");
		$this->load->view("english/sponsored",$banners);
		$this->load->view("english/footer");
	}

}
