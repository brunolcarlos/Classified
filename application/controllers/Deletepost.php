<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Deletepost extends CI_Controller {

	public function index(){


	}

	public function delete(){

		if ($this->input->post("post")) {
			$post = $this->input->post("post");

			$idUsuarioLogado = $this->session->userdata("logado");
			
			$this->load->model('carroshome');
			$this->load->model("deletepostagem");

			if($this->deletepostagem->deletarpost($post,$idUsuarioLogado['idUsuario'],$idUsuarioLogado['ativo'])){
				$this->deletepostagem->deleteImagensThumb($post);
				$this->deletepostagem->deletafotosBanco($post);
				$this->carroshome->deletadealertodealer($post); 
				echo "Success";
			}else{

				echo "Error";
			}
		}else{
			redirect('./home','refresh');
		}

	}

} // Fecha a classe
