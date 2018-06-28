<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Editarcarro extends CI_Controller
{
	
	public function editarcarros(){

		if ($this->session->userdata("logado") and $this->input->post('model')) {

			$preco = $this->input->post('price');
			$novoPreco = str_replace(".", "", $preco);
			$this->load->model("car_model");

			$idUser = $this->session->userdata("logado");
			$idpost = $this->input->post('idpost');

			$idUsuarioDoPost = $this->car_model->busca($idpost);


			$dados = array(
				"titulo" => $this->input->post('model'),
				"youtube" => $this->input->post('youtube'),
				"city" => $this->input->post('city'),
				"make" => $this->input->post('make'),
				"price" => $novoPreco,
				"vin" => $this->input->post('vin'),
				"odometer" => $this->input->post('odometer'),
				"modelo" => $this->input->post('model'),
				"condition" => $this->input->post('condition'),
				"year" => $this->input->post('year'),
				"cylinders" => $this->input->post('cylinders'),
				"drive" => $this->input->post('drive'),
				"fuel" => $this->input->post('fuel'),
				"color" => $this->input->post('color'),
				"size" => $this->input->post('size'),
				"status" => $this->input->post('status'),
				"transmission" => $this->input->post('transmission'),
				"stateAuto" => $this->input->post('state'),
				"detalhes" => $this->input->post('info'),
				"idUser" => $idUsuarioDoPost[0]['idUser'],
				"bodytype" => $this->input->post('type')
				);

			

			

			if ($this->car_model->editarCarro($dados,$idpost)) {

				echo "Successfully edited ad";

			}else{
				echo "Error";
			}

		}else{


			redirect(base_url(),'refresh');

		}

	}
}