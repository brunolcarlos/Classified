<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_edit extends CI_Controller {
	

	public function index($id){
		error_reporting(0);

		if ($this->session->userdata("logado")) {
			
			$this->load->model('banners_model');
			$this->load->model('cadastro_model');
			$this->load->model("car_model");

			@$banners = array(
				'banners' => $this->banners_model->exibeBanner());

			$modelo = explode("-",$id);
			$id = $modelo[0];


			$idUser = $this->session->userdata("logado");


			$this->car_model->ultimoId($id); // redireciona para o home se for nulo

			$dadosCarro = array('dadosCarro' => $this->car_model->busca($id)); 

			// var_dump($idUser);


			if (empty($dadosCarro) or ($dadosCarro['dadosCarro'][0]['idUser'] != $idUser['idUsuario'])) {

				if ($idUser['nivel'] == 'admin') {
					
					$carroLast = $this->car_model->buscalast($id);


					$this->load->view("english/top");
					$this->load->view("english/buscaDealers");
					$this->load->view("english/search");
					$this->load->view("english/banner-sponsored-google");
					$this->load->view("english/car/body-edit-car",$dadosCarro);
					$this->load->view("english/sponsored",$banners);
					$this->load->view("english/footer");
					
				}else{

					redirect(base_url(),'refresh');
					die();
				}
				

			}else{

				$carroLast = $this->car_model->buscalast($id);


				$this->load->view("english/top");
				$this->load->view("english/buscaDealers");
				$this->load->view("english/search");
				$this->load->view("english/banner-sponsored-google");
				$this->load->view("english/car/body-edit-car",$dadosCarro);
				$this->load->view("english/sponsored",$banners);
				$this->load->view("english/footer");
			}

		}else{

			
		}

	}


}



