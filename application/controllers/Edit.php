<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function index() {
		if (!$this->session->userdata("logado")) {
			redirect(base_url(),"refresh");
		}else{
			$this->load->model('banners_model');
			$this->load->model('cadastro_model');
			$this->load->model('carroshome');


			@$banners = array(
				'banners' => $this->banners_model->exibeBanner());

			$dadosL = $this->session->userdata("logado");

			$dados = array('dados' =>$this->cadastro_model->verificaEmail($dadosL['email']));

			$links  = array(
				'links' => $this->carroshome->exibeStates());

			$this->load->view("english/top");
			$this->load->view("english/buscaDealers");
			$this->load->view("english/search");
			$this->load->view("english/banner-sponsored-google");
			$this->load->view("english/editdados/body-edit",$dados);
			$this->load->view("english/editdados/envia-foto",$dados);
			$this->load->view("english/sponsored",$banners);
			$this->load->view("english/marcas");
			$this->load->view("english/home/home-sitemap-body",$links);
			$this->load->view("english/footer");

		}
	}

	public function username(){

		if ($this->input->post("username")) {

			$Username = $this->input->post("username");
			$this->load->model("cadastro_model");
			$urlUsername = $this->cadastro_model->verificausername($Username);
			if ($urlUsername) {
				echo "<span style='color:red;font-weight:bold'><i class='alinhaIcone margenIcone material-icons'>thumb_down</i>Username in use</span>";
			}else{
				echo "<span style='color:#c0ca33;font-weight:bold'><i class='alinhaIcone margenIcone material-icons'>thumb_up</i>Congratulations available url</span>";
			}
		}else{
			redirect('./home','refresh');
		}
		

	}
	public function usernameUpdate(){

		if ($Username = $this->input->post("urlEdit")) {
			$this->load->model("cadastro_model");
			$Username = $this->input->post("urlEdit");
			$urlUsername = $this->cadastro_model->verificausername($Username);
			$dados = $this->session->userdata("logado");
			$user = array(
				'idUsuario' => $dados['idUsuario'],
				'usernameUrl' => $Username
				);
			$dados['usernameUrl'] = $Username;

			if ($urlUsername) {
				echo "<span style='color:red;font-weight:bold'><i class='alinhaIcone margenIcone material-icons'>thumb_down</i>Username in use</span>";
			}else{
				$this->cadastro_model->updateUsuario($user);
				$this->session->set_userdata("logado",$dados);
				echo "<span style='color:#c0ca33;font-weight:bold'><i class='alinhaIcone margenIcone material-icons'>thumb_up</i>Congratulations, altered url 
				<a href='".base_url($Username)."'>www.carsalenew.com/$Username</a></span>";
				die();
			}
		}else{
			redirect('./home','refresh');
		}
	}

	public function alteraFoto(){

		if($_FILES['media']){

			$dados = $this->session->userdata('logado');

			$this->load->model("uploadPerfil_model");

			$this->uploadPerfil_model->verificaValores($dados, $_FILES['media']['tmp_name'], $_FILES['media']['type']);

		}

		// redirect('home','refresh');
	}


	public function editarDados(){

		if ($this->input->post("passwordEditOld")) {
			$dados = array('dados' =>$this->session->userdata("logado"));
			$this->load->model("cadastro_model");
			$senhaAntiga = md5($this->input->post("passwordEditOld"));

			$user = array(
				'nome' => $this->input->post("nameEdit"),
				'telefone' => $this->input->post("telEdit"),
				'email' => $this->input->post("emailEdit"),
				'site' => $this->input->post("siteEdit"),
				'speak' => $this->input->post("speak"),
				'state' => $this->input->post("stateEdit"),
				'usernameUrl' => $dados['dados']['usernameUrl'],
				'endereco' => $this->input->post("addressEdit"),
				'cidade' => $this->input->post("cidadeEdit"),
				'idUsuario' => $dados['dados']['idUsuario'],
				'senha' => md5($this->input->post("passwordEditNew"))
				);

			if ($this->session->userdata("logado")) {
				if (isset($senhaAntiga) and $dados['dados']['senha'] == $senhaAntiga) {

					if ($this->cadastro_model->updateUsuario($user)) {
						$this->session->set_userdata("logado" , $user);

						echo  "1";
					}else{
						echo  "Erro";
					}

				}else{
					echo "<span class='alinhaTexto'><i class=' material-icons alinhaIcone margenIcone text-red'>thumb_down</i>Old password error</span>";

				}
			}else{
				redirect(base_url(),"refresh");
			}

		}else{
			redirect('./home','refresh');
		}

	}
}
