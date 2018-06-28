<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function logout(){
		error_reporting(0);
		$this->session->unset_userdata("logado");
		redirect('./home');
	}


	public function autenticar() {

		if ($this->input->post("email")) {
			error_reporting(0);
			$this->load->model("Cadastro_model");
			$email = $this->input->post("email");
			$senha = md5($this->input->post("password"));
			$usuario = $this->cadastro_model->buscaPorEmailESenha($email, $senha);
			if($usuario) {
				$this->session->set_userdata("logado" , $usuario);
				echo "1";
				die();
			} else {
				echo "Login or password invalid.";
				die();
			}
		}else{
			redirect('./home','refresh');
		}
		
		
	}
	public function recupersenha() {

		$this->load->model("Emailregistro");
		$email = $this->input->post("emailR");
		$date = date("Y-m-d H:i:s");
		$senhaR = md5($date);
		$senha = substr(strtoupper($senhaR),0,6);
		$senhaF = md5($senha);

		
		$this->Emailregistro->updateSenha($email,$senhaF);

		$usuario = $this->Emailregistro->recuperarSenha($email,$senha);


		if($usuario) {
			echo "Success";
			die();
		} else {
			return false;
			die();
		}
		
	}
}