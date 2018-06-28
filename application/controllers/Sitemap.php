<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller{

	public function index(){


		$this->load->model('carroshome');
		$this->load->model('banners_model');

		@$banners = array(
			'banners' => $this->banners_model->exibeBanner());

		$links  = array(
			'links' => $this->carroshome->exibeCarrosHome(150,0));


		$this->load->view("english/top");
		$this->load->view("english/buscaDealers");

		$this->load->view("english/search");
		$this->load->view("english/banner-sponsored-google");
		$this->load->view("english/sitemap/sitemap-body",$links);
		$this->load->view("english/sponsored",$banners);
		$this->load->view("english/footer");

	}


}