<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($offset = null) {


		error_reporting(0);
		$this->load->model('carroshome');


		$this->load->library('pagination');
		$config['base_url'] = base_url('page');
		$config['total_rows'] = $this->carroshome->totalLinhas();
		$qtd = $config['per_page'] = 22;
		$config['uri_segment'] = 2;
		$config['num_links'] = 1;
		$config['cur_tag_open'] = "<li class='waves-effect white-text #1e88e5 blue darken-1 pagenationMinha'><a href='#' class='desativaLink  white-text'>";
		$config['cur_tag_close'] = "</li></a>";
		$config['num_tag_open'] = "<li class='waves-effect brancoA white-text #eeeeee grey lighten-3  pagenationMinha'>";
		$config['num_tag_close'] = "</li>";
		$config['next_tag_open'] = "<li class='waves-effect  brancoA  white-text #eeeeee grey lighten-3 pagenationMinha'>";
		$config['next_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li class='waves-effect brancoA   white-text #eeeeee grey lighten-3 pagenationMinha'>";
		$config['last_tag_close'] = "</li>";
		$config['full_tag_open'] = "<li class='waves-effect  brancoA  white-text #eeeeee grey lighten-3 pagenationMinha'><a href='#' class='desativaLink white-text'>";
		$config['full_tag_close'] = "</li></a>";

		$this->pagination->initialize($config);
		$carros = $this->carroshome->exibeCarrosHome($qtd,$offset);

		//echo "<pre>";
		//var_dump($carros);
		//echo "</pre>";

		$dados = array(
			'dados' => $carros
			);

		$this->load->model('carroshome');
		$carrosSugestao = array(
			'carrosSugestao' => $this->carroshome->exibesugestaohome());

		$this->load->model('banners_model');
		@$banners = array(
			'banners' => $this->banners_model->exibeBanner());

		$links  = array(
			'links' => $this->carroshome->exibeStates());
		
		$this->load->view("english/top");
		$this->load->view("english/buscaDealers");
		$this->load->view("english/search");
		$this->load->view("english/banner-sponsored-google");
		$this->load->view("english/home/home-sugestao",$carrosSugestao);
		$this->load->view("english/home/body",$dados);
		// $this->load->view('english/register-sponsored');
		// $this->load->view("english/sponsored",$banners);
		$this->load->view("english/home/nao-encontrou");
		$this->load->view("english/marcas");
		$this->load->view("english/home/home-sitemap-body",$links);
		$this->load->view("english/footer");

		$this->load->model("carroshome");
		$this->carroshome->criaXml();

	}
	public function error(){
		$this->load->model('banners_model');

		@$banners = array(
			'banners' => $this->banners_model->exibeBanner());

		$this->load->view("english/top");
		$this->load->view("english/buscaDealers");
		$this->load->view("english/search");
		$this->load->view("english/banner-sponsored-google");
		$this->load->view("english/erro404/body-erro");
		// $this->load->view('english/register-sponsored');
		// $this->load->view("english/sponsored",$banners);
		$this->load->view("english/footer");
	}
	public function usernames($username){

		$this->load->model('username');
		$this->load->model('carroshome');

		
		$dados = array (
			"dados"=> $this->username->usuario($username));
		if(isset($dados['dados']['idUsuario'])){
			
			$idUser =  $dados['dados']['idUsuario'];

			$carros = array (
				"carros"=> $this->username->exibeCarrosHome($idUser));

			$links  = array(
				'links' => $this->carroshome->exibeStates());
			
			$this->load->view("english/username/top",$dados);
			$this->load->view("english/buscaDealers");

			$this->load->view("english/search",$carros);
			$this->load->view("english/banner-sponsored-google");
			$this->load->view("english/username/body-username",$dados);
			$this->load->view("english/marcas");
			$this->load->view("english/home/home-sitemap-body",$links);
			$this->load->view("english/footer");
		}else{
			redirect(base_url("home/error"),'refresh');
		}



	}

	public function contactusername(){
		error_reporting(0);

		$this->load->model('username');
		

		$nome =$this->input->post("nameU");
		$email = $this->input->post("emailU");
		$phone = $this->input->post("phoneU");
		$message = $this->input->post("messageU");

		$emailUsername = $this->input->post("username");
		$emailUsername = $this->username->usuario($emailUsername);

		$subject = "Email - sent Car Sale New - Profile page";

		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'mail.carsalenew.com';
		$config['smtp_port']    = '25';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'contato@carsalenew.com';
		$config['smtp_pass']    = '';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

        $this->email->from($config['smtp_user'], $nome);
        $this->email->reply_to($email, $nome);
        $this->email->to($emailUsername['email']); 

        $this->email->subject("$subject - $email");
        $this->email->message($message."<br>Phone : $phone");  

        //echo $this->email->print_debugger();

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $result = $this->email->send();
        if ($result) {
        	echo "<i class='material-icons alinhaIcone margenIcone'>thumb_up</i>Sent with success";
        }
        die();
    }


}
