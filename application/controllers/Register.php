<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index() {

		if ($this->input->post('name')) {
			
			$this->load->model('cadastro_model');
			$senhaEmail = $this->input->post('password');
			$this->load->model('emailregistro');

			$usuario =  array(
				"nome" => $this->input->post('name'),
				"telefone" => $this->input->post('phone'),
				"email" => $this->input->post('email'),
				"state" => $this->input->post('state'),
				"usernameUrl" => "",
				"site" => "",
				"dataCadastro" => date("Y-m-d"),
				"cidade" => "",
				"endereco" => "",
				"senha" => md5($this->input->post('password'))
				);



			$userEmail = $this->cadastro_model->verificaEmail($usuario["email"]);
			if($userEmail){
				echo  "There is already a record with this email";
				die();
			}else{
				$usuario['idUsuario'] = $this->cadastro_model->cadastrarUsuario($usuario);
				$this->session->set_userdata("logado", $usuario);
				echo "1";
				$this->emailregistro->envia_email_registro($usuario["email"],$senhaEmail,$usuario["nome"]);

				die();
			}
		}

		if ($this->session->userdata("logado")) {
			redirect('./home');
		}else{

			$this->load->model('banners_model');
			@$banners = array(
				'banners' => $this->banners_model->exibeBanner());
			$this->load->view("english/top");
			$this->load->view("english/buscaDealers");
			$this->load->view("english/search");
			$this->load->view("english/banner-sponsored-google");
			$this->load->view("english/register/body-register");
			$this->load->view("english/sponsored",$banners);
			$this->load->view("english/footer");
		}

	}


}


