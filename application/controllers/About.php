<?php 

/**
* 
*/
class About extends CI_Controller
{
	
	public function index(){
		
		$this->load->model('banners_model');

		@$banners = array(
			'banners' => $this->banners_model->exibeBanner());


		$dados = array('dados' =>$this->session->userdata("logado"));
		$this->load->view("english/top");
		$this->load->view("english/buscaDealers");
		$this->load->view("english/search");
		$this->load->view("english/banner-sponsored-google");
		$this->load->view("english/about/body-about",$dados);
		// $this->load->view('english/register-sponsored');
		$this->load->view("english/sponsored",$banners);
		$this->load->view("english/footer");
	}


}