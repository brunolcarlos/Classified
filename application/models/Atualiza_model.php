<?php 


/**
* 
*/
class Atualiza_model extends CI_Model
{
	
	public function atzMakes(){

		$this->db->select("*");
		$this->db->from("anuncios");
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->result_array();
	}

}