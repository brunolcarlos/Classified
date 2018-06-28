<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {


	public function index(){
		$this->load->view("english/top");
		$this->load->view("english/buscaDealers");

		$this->load->view("english/search");
		$this->load->view("english/shop/body-shop");
		$this->load->view("english/sponsored");
		$this->load->view("english/footer");
	}


}