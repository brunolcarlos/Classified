<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Atualiza extends CI_Controller
{

	public function atzMake(){

		$this->load->model('atualiza_model');

		$dados = array('dados' =>$this->atualiza_model->atzMakes());


		$this->load->view('english/atualiza', $dados);

	}



}

