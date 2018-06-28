<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Username extends CI_Model {

	public function usuario($username){

		$this->db->where("usernameUrl", $username);
		$usuario = $this->db->get("usuario")->row_array();
		return $usuario;

	}

	public function exibeCarrosHome($id){

		$this->db->limit(13,0);

		$this->db->select("*");
		$this->db->where("idUser",$id);
		$this->db->from("anuncios");
		$this->db->order_by('id', 'DESC');
		
		return $valida = $this->db->get()->result_array();
	}


}