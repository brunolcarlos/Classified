<?php 

class Car_model extends CI_Model
{
	public function busca($id) {

		$this->db->where("id",$id);
		$this->db->from("anuncios");
		$this->db->join("fotosanuncios", "anuncios.id = fotosanuncios.idPost");
		$this->db->join("usuario", "anuncios.idUser = usuario.idUsuario");
		$this->db->order_by('idfotos', 'ASC');
		return $this->db->get()->result_array();

	}
	public function acessos($id){

		return $this->db->query("update anuncios set `acessos` = acessos + 1 where id = $id ");

	}

	public function buscalast($id) {

		$this->db->where("id",$id);
		$this->db->from("anuncios");
		$this->db->join("fotosanuncios", "anuncios.id = fotosanuncios.idPost");
		$this->db->join("usuario", "anuncios.idUser = usuario.idUsuario");
		$this->db->order_by('idfotos', 'DESC');
		return $valida = $this->db->get()->result_array();

	}
	public function ultimoId($id){


		//verifica se o numero da paginação existe, se for maior que o ultimo id ele direciona
		$this->db->select_max('id');      
		$maxid = $this->db->get('anuncios')->row();       
		$max = $maxid->id; 
		if ($max < $id) {
			redirect('./home');
		}


	}
	public function editarCarro($dados,$id){

		$this->db->where("id",$id);
		return $this->db->update("anuncios",$dados);

	}

}



?>