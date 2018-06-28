<?php 

/**
* 
*/
class Testadata extends CI_Controller
{
	public function index(){


		$this->load->model("cadastro_model");
		$usuarioV = $this->cadastro_model->verificaemail("sitespomerode@gmail.com");
		// var_dump($usuarioV);

		if ($usuarioV['validadeVip'] == '') {
			$usuarioV['validadeVip'] = date('Y-m-d');
		}
		echo $usuarioV['validadeVip'] = date('Y-m-d', strtotime("+1 month", strtotime($usuarioV['validadeVip'])));
	}
}
