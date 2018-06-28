<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


/**
* Busca por Dealers
*/
class Buscadealers extends CI_Controller
{
	
	public function search(){

		if ($this->input->post('infos')) {
			
			$nameDealer = $this->input->post('infos');

			$this->load->model('cadastro_model');

			$dados = $this->cadastro_model->buscadealer($nameDealer);


			// $dados = array(
			// 	'nome' => 'Bruno luiz carlos',
			// 	'usernameUrl' => 'bruno',
			// 	'foto' => 'avatar/17-02/d2888e95ef0ecc217cf9240f8f76ca2b.jpg'
			// 	);
		// var_dump($dados);

			if ($dados) {

				foreach ($dados as $dado) {
					
					$foto = (!$dado['fotoPequena']) ? base_url($dado['foto']) : base_url($dado['fotoPequena']);

					echo "<a class='AtrocaCorDealer' href='".base_url($dado['usernameUrl'])."'>";
					echo "<ul class='dealersClass'>";
					echo "<img style='width:30px;height:30px;float:left' src='".$foto."'>";
					echo "<li class='trocaCorLiDealer'>".removehtml($dado['nome']).'  -  '.removehtml($dado['state'])."</li>";
					echo "</ul>";
					echo "</a>";

				}

			}else{

				return false;

			}
		}

	}
}